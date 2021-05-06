<?php

ini_set('display_errors', true);
error_reporting(E_ERROR | E_PARSE | E_NOTICE | E_WARNING);

$base='ontime/';
include_once($base."OnTime.php");
$demo=new OnTime();

echo "********** <br> Main containe <br> ********** <br> <br>";
echo "Try conect with correct info ->Connect('admin','OT2021Free'): ";
$demo->Connect('admin','OT2021Free');


echo "********** <br> Creating basic content data for crete css styles <br> ********** <br> <br>";
$name='page';
$table='size';
$demo->CrtBscIn($table,'Letters size',$name);
$demo->AnnInAdd($table,'b',$name);
$demo->UpnCntIn('shuge','35px',$table, $name);
$demo->UpnCntIn('sbig','30px',$table, $name);
$demo->UpnCntIn('sxl','25px',$table, $name);
$demo->UpnCntIn('sl','20px',$table, $name);
$demo->UpnCntIn('sm','15px',$table, $name);
$demo->UpnCntIn('ss','12px',$table, $name);
$demo->UpnCntIn('sxs','10px',$table, $name);

$table='color';
$demo->CrtBscIn($table,'Colors',$name);
$demo->AnnInAdd($table,'b',$name);
$demo->UpnCntIn('transparent','transparent','color', $name);
$demo->UpnCntIn('black','black',$table, $name);
$demo->UpnCntIn('red','red',$table, $name);
$demo->UpnCntIn('brown','#534a14',$table, $name);
$demo->UpnCntIn('cream','$fdffd4',$table, $name);
$demo->UpnCntIn('green','#579835',$table, $name);
$demo->UpnCntIn('dark browm','#8b4513',$table, $name);
$demo->UpnCntIn('marron','#800000',$table, $name);
$demo->UpnCntIn('yellow','#f2f234',$table, $name);
$demo->UpnCntIn('beige','#deb887',$table, $name);

$table='style';
$demo->CrtBscIn($table,'Letter Style',$name);
$demo->AnnInAdd($table,'b',$name);
$demo->UpnCntIn('normal','normal',$table, $name);
$demo->UpnCntIn('italic','italic',$table, $name);
$demo->UpnCntIn('oblique','oblique',$table, $name);

$table='variant';
$demo->CrtBscIn($table,'Letter variant',$name);
$demo->AnnInAdd($table,'b',$name);
$demo->UpnCntIn('vnormal','vnormal',$table, $name);
$demo->UpnCntIn('vsmall','vsmall',$table, $name);
$demo->UpnCntIn('vblack','vblack',$table, $name);

$table='weight';
$demo->CrtBscIn($table,'Letter weight',$name);
$demo->AnnInAdd($table,'b',$name);
$demo->UpnCntIn('sublime','900',$table, $name);
$demo->UpnCntIn('subhead','700',$table, $name);
$demo->UpnCntIn('colhead','200',$table, $name);
$demo->UpnCntIn('data','300',$table, $name);
$demo->UpnCntIn('comment','100',$table, $name);
$demo->UpnCntIn('menu','100',$table, $name);

$table='myletters';
$demo->CrtBscIn($table,'My letters by Use',$name);
$demo->AnnInAdd($table,'b',$name);

$demo->UpnCntIn('Body','Oswald',$table, $name);
$demo->UpnCntIn('Headers','Sofia',$table, $name);
$demo->UpnCntIn('Error','Sofia',$table, $name);
$demo->UpnCntIn('Windows','Tangerine',$table, $name);
$demo->UpnCntIn('footer','Tangerine',$table, $name);

$table='UPoss';
$demo->CrtBscIn($table,'Postions',$name);
$demo->AnnInAdd($table,'b',$name);
$demo->UpnCntIn('static',"Elements render in order, as they appear in the document flow",$table, $name);
$demo->UpnCntIn('absolute',"The element is positioned relative to its first positioned (not static) ancestor element",$table, $name);
$demo->UpnCntIn('fixed',"The element is positioned relative to the browser window",$table, $name);
$demo->UpnCntIn('relative',"The element is positioned relative to its normal position, so 'left:20px' adds 20 pixels to the element's LEFT position",$table, $name);
$demo->UpnCntIn('sticky',"The element is positioned based on the user's scroll position A sticky element toggles between relative and fixed, depending on the scroll position. It is positioned relative until a given offset position is met in the viewport - then it 'sticks' in place (like position:fixed).",$table, $name);

$table='USize';
$demo->CrtBscIn($table,'Size Units',$name);
$demo->AnnInAdd($table,'b',$name);
$demo->UpnCntIn('cm',"centimeters",$table, $name);
$demo->UpnCntIn('mm',"millimeters",$table, $name);
$demo->UpnCntIn('in',"inches (1in = 96px = 2.54cm)",$table, $name);
$demo->UpnCntIn('px',"pixels (1px = 1/96th of 1in)",$table, $name);
$demo->UpnCntIn('pt',"points (1pt = 1/72 of 1in)",$table, $name);
$demo->UpnCntIn('pc',"picas (1pc = 12 pt)",$table, $name);
$demo->UpnCntIn('em',"Relative to the font-size of the element (2em means 2 times the size of the current font)",$table, $name);
$demo->UpnCntIn('ex',"Relative to the x-height of the current font (rarely used)",$table, $name);
$demo->UpnCntIn('ch',"Relative to the width of the '0' (zero)",$table, $name);
$demo->UpnCntIn('rem',"Relative to font-size of the root element",$table, $name);
$demo->UpnCntIn('vw',"Relative to 1% of the width of the viewport*",$table, $name);
$demo->UpnCntIn('vh',"Relative to 1% of the height of the viewport*",$table, $name);
$demo->UpnCntIn('vmin',"Relative to 1% of viewport's* smaller dimension",$table, $name);
$demo->UpnCntIn('vmax',"Relative to 1% of viewport's* larger dimension",$table, $name);
$demo->UpnCntIn('%',"Relative to the parent element",$table, $name);

$table='Cursor';
$demo->CrtBscIn($table,'Cursor ',$name);
$demo->AnnInAdd($table,'b',$name);
$demo->UpnCntIn('alias',"alias",$table, $name);
$demo->UpnCntIn('all-scroll',"all-scroll",$table, $name);
$demo->UpnCntIn('auto',"auto",$table, $name);
$demo->UpnCntIn('cell',"cell",$table, $name);
$demo->UpnCntIn('context-menu',"context-menu",$table, $name);
$demo->UpnCntIn('col-resize',"col-resize",$table, $name);
$demo->UpnCntIn('copy',"copy",$table, $name);
$demo->UpnCntIn('crosshair',"crosshair",$table, $name);
$demo->UpnCntIn('default',"default",$table, $name);
$demo->UpnCntIn('e-resize',"e-resize",$table, $name);
$demo->UpnCntIn('ew-resize',"ew-resize",$table, $name);
$demo->UpnCntIn('grab',"grab",$table, $name);
$demo->UpnCntIn('grabbing',"grabbing",$table, $name);
$demo->UpnCntIn('help',"help",$table, $name);
$demo->UpnCntIn('move',"move",$table, $name);
$demo->UpnCntIn('n-resize',"n-resize",$table, $name);
$demo->UpnCntIn('ne-resize',"ne-resize",$table, $name);
$demo->UpnCntIn('nesw-resize',"nesw-resize",$table, $name);
$demo->UpnCntIn('ns-resize',"ns-resize",$table, $name);
$demo->UpnCntIn('nw-resize',"nw-resize",$table, $name);
$demo->UpnCntIn('nwse-resize',"nwse-resize",$table, $name);
$demo->UpnCntIn('no-drop',"no-drop",$table, $name);
$demo->UpnCntIn('none',"none",$table, $name);
$demo->UpnCntIn('not-allowed',"not-allowed",$table, $name);
$demo->UpnCntIn('pointer',"pointer",$table, $name);
$demo->UpnCntIn('progress',"progress",$table, $name);
$demo->UpnCntIn('row-resize',"row-resize",$table, $name);
$demo->UpnCntIn('s-resize',"s-resize",$table, $name);
$demo->UpnCntIn('se-resize',"se-resize",$table, $name);
$demo->UpnCntIn('sw-resize',"sw-resize",$table, $name);
$demo->UpnCntIn('text',"text",$table, $name);
$demo->UpnCntIn('w-resize',"w-resize",$table, $name);
$demo->UpnCntIn('wait',"wait",$table, $name);
$demo->UpnCntIn('zoom-in',"zoom-in",$table, $name);
$demo->UpnCntIn('zoom-out',"zoom-out",$table, $name);

$table='Border_Style ';
$demo->CrtBscIn($table,'Css Borders ',$name);
$demo->AnnInAdd($table,'b',$name);
$demo->UpnCntIn('dotted',"Defines a dotted border",$table, $name);
$demo->UpnCntIn('dashed',"Defines a dashed border",$table, $name);
$demo->UpnCntIn('solid',"Defines a solid border",$table, $name);
$demo->UpnCntIn('double',"Defines a double border",$table, $name);
$demo->UpnCntIn('groove',"Defines a 3D grooved border. The effect depends on the border-color value",$table, $name);
$demo->UpnCntIn('ridge',"Defines a 3D grooved border. The effect depends on the border-color value",$table, $name);
$demo->UpnCntIn('inset',"Defines a 3D inset border. The effect depends on the border-color value",$table, $name);
$demo->UpnCntIn('outset',"Defines a 3D outset border. The effect depends on the border-color value",$table, $name);
$demo->UpnCntIn('none',"Defines no border",$table, $name);
$demo->UpnCntIn('hidden',"Defines a hidden border",$table, $name);

$table='HAlign';
$demo->CrtBscIn($table,'Horizontal Aling ',$name);
$demo->AnnInAdd($table,'b',$name);
$demo->UpnCntIn('left',"Aligns the text to the left	",$table, $name);
$demo->UpnCntIn('right',"Aligns the text to the right",$table, $name);
$demo->UpnCntIn('center',"Centers the text",$table, $name);
$demo->UpnCntIn('justify',"Stretches the lines so that each line has equal width (like in newspapers and magazines)",$table, $name);

$table='DecoLine';
$demo->CrtBscIn($table,'Decoration line ',$name);
$demo->AnnInAdd($table,'b',$name);
$demo->UpnCntIn('overline',"overline",$table, $name);
$demo->UpnCntIn('underline',"underline",$table, $name);
$demo->UpnCntIn('line-through',"line-through",$table, $name);
$demo->UpnCntIn('underline overline',"underline overline",$table, $name);

$table='Dispalyval';
$demo->CrtBscIn($table,'Options for display',$name);
$demo->AnnInAdd($table,'b',$name);
$demo->UpnCntIn('inline',"Displays an element as an inline element (like <span>). Any height and width properties will have no effect",$table, $name);
$demo->UpnCntIn('block',"Displays an element as a block element (like <p>). It starts on a new line, and takes up the whole width",$table, $name);
$demo->UpnCntIn('contents',"Makes the container disappear, making the child elements children of the element the next level up in the DOM",$table, $name);
$demo->UpnCntIn('flex',"Displays an element as a block-level flex container",$table, $name);
$demo->UpnCntIn('grid',"Displays an element as a block-level grid container",$table, $name);
$demo->UpnCntIn('inline-block',"Displays an element as an inline-level block container. The element itself is formatted as an inline element, but you can apply height and width values",$table, $name);
$demo->UpnCntIn('inline-flex',"Displays an element as an inline-level flex container",$table, $name);
$demo->UpnCntIn('inline-grid',"Displays an element as an inline-level grid container",$table, $name);
$demo->UpnCntIn('inline-table',"The element is displayed as an inline-level table",$table, $name);
$demo->UpnCntIn('list-item',"Let the element behave like a <li> element",$table, $name);
$demo->UpnCntIn('run-in',"Displays an element as either block or inline, depending on context",$table, $name);
$demo->UpnCntIn('table',"Let the element behave like a <table> element",$table, $name);
$demo->UpnCntIn('table-caption',"Let the element behave like a <caption> element",$table, $name);
$demo->UpnCntIn('table-column-group',"Let the element behave like a <colgroup> element",$table, $name);
$demo->UpnCntIn('table-header-group',"Let the element behave like a <thead> element",$table, $name);
$demo->UpnCntIn('table-footer-group',"Let the element behave like a <tfoot> element",$table, $name);
$demo->UpnCntIn('table-row-group',"Let the element behave like a <tbody> element",$table, $name);
$demo->UpnCntIn('table-cell',"Let the element behave like a <td> element",$table, $name);
$demo->UpnCntIn('table-column',"Let the element behave like a <col> element",$table, $name);
$demo->UpnCntIn('table-row',"Let the element behave like a <tr> element",$table, $name);
$demo->UpnCntIn('none',"The element is completely removed",$table, $name);


echo "********** <br> Creating data dictionari for crete css styles <br> ********** <br> <br>";

$demo->DddAddFld('SizeCss', array('FldTpe'=>'A','FldDsc'=>'Setup size of css','FldVld'=>array('Name'=>'subset_join', 'in'=>'Size')));
$demo->DddAddFld('ColorCss', array('FldTpe'=>'S','FldDsc'=>'Css Color of the element','FldVld'=>array('Name'=>'bringin','content'=>'color', 'in'=>'page')));
$demo->DddAddFld('Sides', array('FldTpe'=>'A','FldDsc'=>'Setup Sides of css','FldVld'=>array('Name'=>'subset_join', 'in'=>'SizeArround')));

$demo->CrtRcd('Size','Size & unit of an element');
$demo->DddAddFld('SzNumber', array('FldTpe'=>'I','FldDsc'=>'Css About the amount of the size'));
$demo->RcdAddIn('Size','SzNumber', array('FldEmp'=>TRUE));
$demo->DddAddFld('SzUnit', array('FldTpe'=>'S','FldDsc'=>'Css With of the element','FldVld'=>array('Name'=>'lookin','content'=>'USize', 'in'=>'page')));
$demo->RcdAddIn('Size','SzUnit', array('FldEmp'=>TRUE)); 

$demo->CrtRcd('Styles','Side Styles in Css propierties');

$demo->DddAddFld('BorderStyleCss', array('FldTpe'=>'S','FldDsc'=>'Style of the corder','FldVld'=>array('Name'=>'lookin','
content'=>'Border_Style', 'in'=>'page')));

$demo->RcdAddIn('Styles','1-Top', array('FldEmp'=>TRUE),'BorderStyleCss');
$demo->RcdAddIn('Styles','2-Left', array('FldEmp'=>TRUE),'BorderStyleCss');
$demo->RcdAddIn('Styles','3-Bottom', array('FldEmp'=>TRUE),'BorderStyleCss');
$demo->RcdAddIn('Styles','4-Rigth', array('FldEmp'=>TRUE),'BorderStyleCss');
$demo->RcdAddIn('Styles','All', array('FldEmp'=>TRUE),'BorderStyleCss');

$demo->CrtRcd('SizeArround','Side Styles arround object in Css propierties');
$demo->RcdAddIn('SizeArround','1-Top', array('FldEmp'=>TRUE),'SizeCss');
$demo->RcdAddIn('SizeArround','2-Lef', array('FldEmp'=>TRUE),'SizeCss');
$demo->RcdAddIn('SizeArround','3-Bottom', array('FldEmp'=>TRUE),'SizeCss');
$demo->RcdAddIn('SizeArround','4-Rigth', array('FldEmp'=>TRUE),'SizeCss');
$demo->RcdAddIn('SizeArround','All', array('FldEmp'=>TRUE),'SizeCss');

$demo->CrtRcd('Css','Cascading Style Sheets Definition');

$demo->RcdAddIn('Css','RecId', array('FldEmp'=>FALSE));
$demo->RcdAddIn('Css','Name', array('FldEmp'=>FALSE));

$demo->DddAddFld('font-family', array('FldTpe'=>'S','FldDsc'=>'Css Font family','FldVld'=>array('Name'=>'bringin','content'=>'myletters', 'in'=>'page')));
$demo->RcdAddIn('Css','font-family', array('FldEmp'=>TRUE));

$demo->DddAddFld('font-style', array('FldTpe'=>'S','FldDsc'=>'Css Font style','FldVld'=>array('Name'=>'bringin','content'=>'style', 'in'=>'page')));
$demo->RcdAddIn('Css','font-style', array('FldEmp'=>TRUE));

$demo->RcdAddIn('Css','font-size', array('FldEmp'=>TRUE),'SizeCss');

$demo->DddAddFld('font-variant', array('FldTpe'=>'S','FldDsc'=>'Css Font variant','FldVld'=>array('Name'=>'bringin','content'=>'variant', 'in'=>'page')));
$demo->RcdAddIn('Css','font-variant', array('FldEmp'=>TRUE));

$demo->DddAddFld('font-weight', array('FldTpe'=>'S','FldDsc'=>'Css Font weight','FldVld'=>array('Name'=>'bringin','content'=>'weight', 'in'=>'page')));
$demo->RcdAddIn('Css','font-weight', array('FldEmp'=>TRUE));

$demo->RcdAddIn('Css','color', array('FldEmp'=>TRUE), 'ColorCss');
$demo->RcdAddIn('Css','background-color', array('FldEmp'=>TRUE), 'ColorCss');

$demo->DddAddFld('position', array('FldTpe'=>'S','FldDsc'=>'Css Font family','FldVld'=>array('Name'=>'bringin','content'=>'UPoss', 'in'=>'page')));
$demo->RcdAddIn('Css','position', array('FldEmp'=>TRUE));

$demo->RcdAddIn('Css','width', array('FldEmp'=>TRUE),'SizeCss');
$demo->RcdAddIn('Css','height', array('FldEmp'=>TRUE),'SizeCss');
$demo->RcdAddIn('Css','top', array('FldEmp'=>TRUE),'SizeCss');
$demo->RcdAddIn('Css','left', array('FldEmp'=>TRUE),'SizeCss');
$demo->RcdAddIn('Css','right', array('FldEmp'=>TRUE),'SizeCss');
$demo->RcdAddIn('Css','bottom', array('FldEmp'=>TRUE),'SizeCss');

$demo->DddAddFld('cursor', array('FldTpe'=>'A','FldDsc'=>'Css With of the element','FldVld'=>array('Name'=>'lookin','content'=>'Cursor', 'in'=>'page')));
$demo->RcdAddIn('Css','cursor', array('FldEmp'=>TRUE));

$demo->DddAddFld('border-style', array('FldTpe'=>'A','FldDsc'=>'Css With of the element','FldVld'=>array('Name'=>'subset_sort', 'in'=>'Styles')));
$demo->RcdAddIn('Css','border-style', array('FldEmp'=>TRUE));

$demo->RcdAddIn('Css','border-color', array('FldEmp'=>TRUE), 'ColorCss');
$demo->RcdAddIn('Css','text-decoration-color', array('FldEmp'=>TRUE), 'ColorCss');

$demo->DddAddFld('text-decoration-line', array('FldTpe'=>'A','FldDsc'=>'Css With of the element','FldVld'=>array('Name'=>'lookin','content'=>'DecoLine', 'in'=>'page')));
$demo->RcdAddIn('Css','text-decoration-line', array('FldEmp'=>TRUE));

$demo->DddAddFld('text-decoration', array('FldTpe'=>'A','FldDsc'=>'Css With of the element','FldVld'=>array('Name'=>'lookin','content'=>'DecoLine', 'in'=>'page')));
$demo->RcdAddIn('Css','text-decoration', array('FldEmp'=>TRUE));

$demo->DddAddFld('text-decoration-style', array('FldTpe'=>'A','FldDsc'=>'Css With of the element','FldVld'=>array('Name'=>'lookin','content'=>'DecoStyle', 'in'=>'page')));
$demo->RcdAddIn('Css','text-decoration-style', array('FldEmp'=>TRUE));

$demo->DddAddFld('text-align', array('FldTpe'=>'A','FldDsc'=>'Css With of the element','FldVld'=>array('Name'=>'lookin','content'=>'HAlign', 'in'=>'page')));
$demo->RcdAddIn('Css','text-align', array('FldEmp'=>TRUE));

$demo->RcdAddIn('Css','margin', array('FldEmp'=>TRUE),'Sides');
$demo->RcdAddIn('Css','border-radius', array('FldEmp'=>TRUE),'Sides');
$demo->RcdAddIn('Css','padding', array('FldEmp'=>TRUE),'Sides');

$demo->RcdAddIn('Css','max-width', array('FldEmp'=>TRUE),'SizeCss');
$demo->RcdAddIn('Css','max-heigh', array('FldEmp'=>TRUE),'SizeCss');

$demo->DddAddFld('display', array('FldTpe'=>'S','FldDsc'=>'Css With of the element','FldVld'=>array('Name'=>'lookin','content'=>'Dispalyval', 'in'=>'page')));
$demo->RcdAddIn('Css','display', array('FldEmp'=>TRUE));

$demo->DddAddFld('float', array('FldTpe'=>'S','FldDsc'=>'Css With of the element','FldVld'=>array('Name'=>'in','content'=>array('left','right','none'))));
$demo->RcdAddIn('Css','float', array('FldEmp'=>TRUE));

echo "********** <br> Activate Table feature in page  <br> ********** <br> <br>";
$table = 'MainCss';
$inside = 'page';
$demo->CrtFtrTbl($inside);
$demo->CrtTblIn($table, 'Main CSS sample file', 'Css' , $inside);
$demo->AnnInAdd($table,'t',$inside);

$demo->UpsTblIn($table , 'Body', array('Name'=>'Body Css', 'font-family'=> 'Body','font-size'=>array('SzNumber'=>12,'SzUnit'=>'px'), 'width'=>array('SzNumber'=>100,'SzUnit'=>'%'), 'height'=>array('SzNumber'=>100,'SzUnit'=>'vh')),$inside);
$demo->ot_show($demo->errvalid);




echo "**********+++++++++++ <br> Data Finish<br> **********+++++++++++ <br> <br>";
?>