<?php 
/*
Class Name:		SimpleMultiplicationTable 
Author    : 	Dharmendra Kumar 
Author URI: 	http://www.dharmendramca.wordpress.com
GIT       : 	https://github.com/dharmendramca
Ver 	  :		1.0
*/ 

class SimpleMultiplicationTable { 

public $num;
public $background;
public $textcolor;
private $val=array();

public function output(int $num, $background='#fff', $textcolor='#000') 
{ 
if(intval($num)>0)

?><style type="text/css">


/*** Table Styles **/

h1{text-align: center;
font-size: 36px;
}
.table-fill {
 height: auto;
  margin: auto;
  max-width: 600px;
  padding:5px;
  width: 100%;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
  animation: float 5s infinite;
  border: none;
  background-color: <?php echo isset($background)?$background:'none'; ?>;

}

  
tr {
 
  color:#666B85;
  font-size:16px;
  font-weight:normal;
  text-shadow: 0 1px 1px rgba(256, 256, 256, 0.1);
}
 
tr:first-child {
  border-top:none;
}

tr:last-child {
  border-bottom:none;
}
 
tr:nth-child(odd) td {
  background:#4E5066;

}
 
tr:nth-child(odd):hover td {
  background:#4E5066;
}


 
td {
  background:#FFFFFF;
  padding:20px;
  text-align:center;
  vertical-align:middle;
  font-weight:300;
  font-size:18px;
  text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
  color: <?php echo isset($textcolor)?$textcolor:'none'; ?>;
}

td:last-child {
  border-right: 0px;
}

th.text-left {
  text-align: left;
}

th.text-center {
  text-align: center;
}

th.text-right {
  text-align: right;
}

td.text-left {
  text-align: left;
}

td.text-center {
  text-align: center;
}

td.text-right {
  text-align: right;
}

</style><div style="overflow-x:auto;">
		<h1>Multiplication Table for <?php echo $num; ?></h1>
	<table class="table-fill">
   <?php for ($i=1; $i <=10; $i++):?> <tr>
         
          <td align="center"> <?php echo $num; ?></td>	
         <td align="center">X</td>
         <td align="center"> <?php echo $i; ?></td>
        <td align="center">=</td>
         <td align="center"> <?php echo ($num*$i); ?></td>
    </tr><?php endfor;?>
</table>
</div>
<?php
	
	}
} 


