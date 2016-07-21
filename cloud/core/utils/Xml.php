<?php

/**
 * XML助手类,提供xml转换到数组和数组转换到xml方法
 * 
 * @package cloud.core.utils
 */

namespace cloud\core\utils;

class Xml {

    /**
     * XML文件内容转成数组
     * 
     * @param string $xml
     * @param boolean $isNormal 默认false
     * @return array $data
     */
    public static function xmlToArray( $xml, $isNormal = false ) {
        $xmlParser = new XMLParse( $isNormal );
        $data = $xmlParser->parse( $xml );
        $xmlParser->destruct();
        return $data;
    }

    /**
     * 数组转成XML格式内容
     * @param array $arr
     * @param boolean $htmlOn 是否html内容
     * @param integer $level xml的层级
     * @return string
     */
    public static function arrayToXml( $arr, $htmlOn = true, $level = 1 ) {
        $string = $level == 1 ? "<?xml version=\"1.0\" encoding=\"ISO-8859-1\"?>\r\n<root>\r\n" : '';
        $space = str_repeat( "\t", $level );
        foreach ( $arr as $key => $value ) {
            if ( !is_array( $value ) ) {
                $string .= $space . "<item id=\"{$key}\">" . ($htmlOn ? '<![CDATA[' : '') . $value . ($htmlOn ? ']]>' : '') . "</item>\r\n";
            } else {
                $string .= $space . "<item id=\"{$key}\">\r\n" . self::arrayToXml( $value, $htmlOn, $level + 1 ) . $space . "</item>\r\n";
            }
        }
        $string = preg_replace( "/([\x01-\x08\x0b-\x0c\x0e-\x1f])+/", ' ', $string );
        return $level == 1 ? $string . "</root>" : $string;
    }

}

/**
 * XML解析类,提供创建xml解析方法
 * 
 * @package application.core.utils
 */
class XMLParse {

    /**
     * xml解析对象
     * @var mixed 
     */
    private $_parser;

    /**
     *
     * @var array
     */
    private $_document;

    /**
     *
     * @var array
     */
    private $_stack;

    /**
     *
     * @var string
     */
    private $_data;

    /**
     *
     * @var string
     */
    private $_lastOpenedTag;

    /**
     *
     * @var boolean
     */
    private $_isNormal;

    /**
     *
     * @var array
     */
    private $_attrs = array();

    /**
     *
     * @var boolean
     */
    private $_failed = false;

    /**
     * 
     * @param boolean $isNormal
     */
    public function __construct( $isNormal ) {
        $this->_isNormal = $isNormal;
        $this->_parser = xml_parser_create( 'ISO-8859-1' );
        xml_parser_set_option( $this->_parser, XML_OPTION_CASE_FOLDING, false );
        xml_set_object( $this->_parser, $this );
        xml_set_element_handler( $this->_parser, 'open', 'close' );
        xml_set_character_data_handler( $this->_parser, 'data' );
    }

    /**
     * 
     */
    public function destruct() {
        xml_parser_free( $this->_parser );
    }

    /**
     * 
     * @param string $data
     * @return string
     */
    public function parse( &$data ) {
        $this->_document = array();
        $this->_stack = array();
        $flag = xml_parse( $this->_parser, $data, true );
        $failedFlag = $this->_failed;
        if ( $flag && !$failedFlag ) {
            return $this->_document;
        } else {
            return '';
        }
    }

    /**
     * 
     * @param resource $parser
     * @param string $tag
     * @param array $attributes
     */
    public function open( &$parser, $tag, $attributes ) {
        $this->_data = '';
        $this->_failed = false;
        if ( !$this->_isNormal ) {
            if ( isset( $attributes['id'] ) ) {
                $this->_document = &$this->_document[$attributes['id']];
            } else {
                $this->_failed = true;
            }
        } else {
            if ( !isset( $this->_document[$tag] ) ) {
                $this->_document = &$this->_document[$tag];
            } else {
                $this->_failed = true;
            }
        }
        $this->_stack[] = &$this->_document;
        $this->_lastOpenedTag = $tag;
        $this->_attrs = $attributes;
    }

    /**
     * 
     * @param resource $parser
     * @param string $data
     */
    public function data( &$parser, $data ) {
        if ( $this->_lastOpenedTag != null ) {
            $this->_data .= $data;
        }
    }

    /**
     * 
     * @param resource $parser
     * @param string $tag
     */
    public function close( &$parser, $tag ) {
        if ( $this->_lastOpenedTag == $tag ) {
            $this->_document = $this->_data;
            $this->_lastOpenedTag = null;
        }
        array_pop( $this->_stack );
        if ( $this->_stack ) {
            $this->_document = &$this->_stack[count( $this->_stack ) - 1];
        }
    }

}
