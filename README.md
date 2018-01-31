# Arabic_ChineseDigit2ArabicDigit

1)之前做的是纯中文数字转化为阿拉伯数字，因为项目需求，这个版本做的是将阿拉伯数字和中文数字混合型全部转化为阿拉伯数字；

 Previously,I converted pure chinese digits to arabic digits,now I will convert a string of mixed arabic and chinese digits to arabic digits
 
 
2）思想：将阿拉伯数字和中文数字混合型转化为纯阿拉伯数字的思想是采用正则表达式将全部的混合型位置找到，然后将阿拉伯数字乘以后边的中文数字对应的
         单位，循环进行，直到无法进行正则。
		 
	Idea:the idea is to use regular function to find all the string position of arabic digits and chinese digits ,for example,
	     $pattern = '/\d+\.?\d*[十百千万亿]/u',in php,you should pay attention to chinese ,use utf-8 mode,here, we use u to denote it,
		 then replace the position with arabic * (float)Chinese digit，120万亿=>1200000亿，then continue the process,until it can't find 
		 regular position.