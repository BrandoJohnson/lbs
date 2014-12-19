function pop(url, x, y){
   window.open(url,'profile','width='+x+',height='+y+',scrollbars=yes,top=10,left=10');
 }
 
function openThis(url, x, y){
   features='top=10,left=10,width='+x+',height='+y+',scrollbars=yes,toolbar=yes,menubar=yes,scrollbars=yes,resizable=yes,location=yes,directories=yes,status=yes';
   mywindow=window.open(url,'profile',features);
   mywindow.focus();	
 }
