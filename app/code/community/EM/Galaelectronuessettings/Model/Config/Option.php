<?php class EM_Galaelectronuessettings_Model_Config_Option{    /**     * google fonts list     *     * @var string     */    private $options_label = "Font weight 300,300 Italic,Font weight 400,400 Italic,Font weight  500,500 Italic,Font weight 700,700 Italic";	private $options_value = "100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic";    	public function toOptionArray()    {        $gfont_options_label = explode(',', $this->options_label);		$gfont_options_value = explode(',', $this->options_value);        $options = array();        foreach ($gfont_options_value as $f ){            $options[] = array(                'label' => $f,				'value' => $f,            );        }	/*	foreach ($options_value as $f_value ){            $options[] = array(                'value' => $f_value,            );        } */        return $options;    } }