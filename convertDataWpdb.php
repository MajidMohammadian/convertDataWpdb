<?php
/**
 * Plugin Name: convertor data wpdb
 * Description: convertor data use for wpdb
 * Version: 1.1
 * Author: majeed mohammadian
 */

class ConvertDataWpdb
{
    private $data = [];
    private $dataFormat = [];

    /**
     * @param array $bindData
     */
    public function __construct($bindData)
    {
        foreach( $bindData as $key => $value ) {
            foreach( $value as $k => $v ) {
                if( $k ) $this->data[ $k ] = $v;
                $this->dataFormat[ $key ] = $v;
            }
        }
    }

    /**
     * @return array
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @return array
     */
    public function getFormat()
    {
        return $this->dataFormat;
    }
}

?>