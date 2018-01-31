<?php
	//正则表达式实现阿拉伯数字和中文百万亿等搭配单位全部转化为阿拉伯数字
	public function convert_araDig2cnDig($sentence){
		$cnDig_araDig=array('十'=>10,'百'=>100,'千'=>1000,'万'=>10000,'亿'=>100000000);
		//must attention: use the u denote utf-8
		$pattern = '/\d+\.?\d*[十百千万亿]/u';
		$flag=preg_match_all($pattern,$sentence,$match);
		while($flag>0){
			$arr_match=$match[0];
			foreach($arr_match as $araDig){
				$big= $cnDig_araDig[mb_substr($araDig,-1,NULL,'utf-8')];
				$small=(float)mb_substr($araDig,0,NULL,'utf-8');
				$temp=$big*$small;
				$sentence=str_replace($araDig,$temp,$sentence);
			}
			$flag=preg_match_all($pattern,$sentence,$match);
		}
		return $sentence;
	}
