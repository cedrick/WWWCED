/*
  PHPWPos, Open Source Point-Of-Sale System
  http://phpwpos.ptwebserve.com

  Copyright (c) 2006 Moisés Sequeira

  Released under the GNU General Public License
*/

// General JavaScript functions for POS
var req = false;
function loadXMLDoc(url, type){
	// branch for native XMLHttpRequest object
	if(window.XMLHttpRequest) {
    	try {
		req = new XMLHttpRequest();
    	} catch(e) {
		req = false;
    	}
	} 
	// branch for IE/Windows ActiveX version
	else if(window.ActiveXObject) {
    	try {
        	req = new ActiveXObject("Msxml2.XMLHTTP");
    	} catch(e) {
        	try {
          	req = new ActiveXObject("Microsoft.XMLHTTP");
        	} catch(e) {
          	req = false;
        	}
    	}
	}
	if(req) {
		switch(type){
		  case "getItems":
		    req.onreadystatechange = getItems;
		    req.open("GET", url, true);
			req.send("");
			break;
		  case "getCustomers":
			req.onreadystatechange = getCustomers;
			req.open("GET", "getCustomers.php?findcustomertext="+document.getElementById('findcustomertext').value, true);
			req.send("");
			break;
		  case "addCustomer":
			var str = getCustomerValues();
			req.onreadystatechange = getAddedCustomer;
			req.open("POST","setCustomer.php",true);
			req.setRequestHeader("Content-Type","application/x-www-form-urlencoded;charset=iso-8859-1");
			req.send(str);
		 break;
		}
		
	}  
}

//Get customer info after added
function getAddedCustomer() {
    // only if req shows "loaded"
    if (req.readyState == 4) {
        // only if "OK"
        if (req.status == 200) {
	var response = req.responseXML;
	var root = response.getElementsByTagName('customer')[0];
	var cid = root.getElementsByTagName('id')[0].firstChild.nodeValue;
	var cname = root.getElementsByTagName('name')[0].firstChild.nodeValue;
	showCustomerDiv(0);
	document.getElementsById('customer_id')[0].value = cid;
	document.getElementById('customerDiv0').innerHTML = cname;
	}
    }
}

//Get items from a category
function getItems() {
    // only if req shows "loaded"
    if (req.readyState == 4) {
        // only if "OK"
        if (req.status == 200) {
		document.getElementById('fe_items').innerHTML="&nbsp;";
        var response = req.responseXML;
		//Get the xml root
		var root = response.getElementsByTagName("items")[0];
		var items = root.getElementsByTagName("item");
		for(i=0;i<items.length;i++){
		  var iid = items[i].getElementsByTagName("id")[0].firstChild.nodeValue;
		  var iname = items[i].getElementsByTagName("name")[0].firstChild.nodeValue;
		  var iimg = items[i].getElementsByTagName("image")[0].firstChild.nodeValue;
		  var itax = items[i].getElementsByTagName("tax")[0].firstChild.nodeValue;
		  var ibprice = items[i].getElementsByTagName("buyprice")[0].firstChild.nodeValue;
		  var iuprice = items[i].getElementsByTagName("unitprice")[0].firstChild.nodeValue;
		  var iprice = items[i].getElementsByTagName("price")[0].firstChild.nodeValue;
		  var item = document.createElement("table");
		  item.className = "tabitem";
		  item.onclick = new Function("addItem(\""+iid+"\",\""+iname+"\",\""+itax+"\",\""+ibprice+"\",\""+iuprice+"\",\""+iprice+"\");");
		  var tbitem = document.createElement("tbody");
		  item.appendChild(tbitem);
		  var row1 = document.createElement("tr");
		  var row2 = document.createElement("tr");
		  tbitem.appendChild(row1);
		  tbitem.appendChild(row2);
		  var cell1 = document.createElement("td");
		  var cell2 = document.createElement("td");
		  row1.appendChild(cell1);
		  row2.appendChild(cell2);
		  im1 = document.createElement("img");
		  im1.setAttribute("src",iimg);
		  cell1.appendChild(im1);
		  cell2.innerHTML = iname;
		  document.getElementById('fe_items').appendChild(item);
		}
		
        } else {
            alert("There was a problem retrieving the XML data:\n" + req.statusText);
        }
    }
}

//Find customers
function getCustomers() {
    // only if req shows "loaded"
    if (req.readyState == 4) {
        // only if "OK"
        if (req.status == 200) {
            	var response = req.responseXML;
		//Get the xml root
		var root = response.getElementsByTagName('customers')[0];
		var customers = root.getElementsByTagName('customer');
		document.getElementById('findCustomersDiv').innerHTML="";
		tcustomers = document.createElement("table");
		tcustomers.setAttribute("width","100%");
		tcustomers.setAttribute("cellspacing","0");
		tbcustomers = document.createElement("tbody");
		tcustomers.appendChild(tbcustomers);
		for(i=0;i<customers.length;i++){
		  var cid = customers[i].getElementsByTagName("id")[0].firstChild.nodeValue;
		  var cname = customers[i].getElementsByTagName("name")[0].firstChild.nodeValue;
		  row = document.createElement("tr");
		  tbcustomers.appendChild(row);
		  cell = document.createElement("td");
		  cell.className="tvalue_lnk";
		  cell.onclick= new Function("setCustomer('"+cid+"','"+cname+"')");
		  cell.innerHTML='<input type="hidden" value="'+cid+'">'+cname ;
		  row.appendChild(cell);
		}
		document.getElementById('findCustomersDiv').appendChild(tcustomers);
        } else {
            alert("There was a problem retrieving the XML data:\n" + req.statusText);
        }
    }
}

//After a customer is selected, insert values
function setCustomer(cid, cname){
document.getElementById('customerDiv0').innerHTML='<input type="hidden" name="customer" value="'+cid+'">'+cname;
showCustomerDiv(0);
}

//------------------------------------------

//Add item to the sales table
function addItem(id,iitem,tax,bprice,uprice,price){
sit = document.getElementById('tbl_sitems');
sittb = sit.getElementsByTagName('tbody')[0];
row = document.createElement("tr");
row.onclick = new Function("selectRow(document.getElementById('tbl_sitems'),this.rowIndex);");
sittb.appendChild(row);
cell1 = document.createElement("td");
row.appendChild(cell1);
cell2 = document.createElement("td");
row.appendChild(cell2);
cell3 = document.createElement("td");
row.appendChild(cell3);
cell4 = document.createElement("td");
row.appendChild(cell4);
cell1.className="tvalue";
cell2.className="tvalue";
cell2.setAttribute("align","right");
cell3.className="tvalue";
cell3.setAttribute("align","right");
cell4.className="tvalue";
cell4.setAttribute("align","right");
cell1.innerHTML='<input type="hidden" name="items[]" value="'+id+'"><input type="hidden" name="items_name[]" value="'+iitem+'">'+iitem;
cell2.innerHTML='<input type="text" class="inp2" name="itemsqty[]" size="6" onchange="calcS()">';
cell3.innerHTML='<input type="hidden" name="itemstax[]" value="'+tax+'"><input type="hidden" name="itemstotaltax[]" value="0">'+tax;
cell4.innerHTML='<input type="hidden" name="itemsbprice[]" value="'+bprice+'"><input type="hidden" name="itemsuprice[]" value="'+uprice+'"><input type="hidden" name="itemsprice[]" value="'+price+'"><input type="hidden" name="itemstotalprice[]" value="0">'+price;
selectRow(document.getElementById('tbl_sitems'),row.rowIndex);
}


//Get the selected Row in a table
function getSelectedIndex(tbl){
  for(i=0;i<tbl.rows.length;i++){
    if(tbl.rows[i].className=="selected") return i;
  }
  return -1;
}

//Select a row
function selectRow(tbl,ind){
  for(i=0;i<tbl.rows.length;i++){
    if(i==ind)tbl.rows[i].className="selected";
    else tbl.rows[i].className="";
  }
}

//Delete an item in the sales table
function keyboardDEL(tbl){
  selectedRow = getSelectedIndex(tbl);
  if(selectedRow > 0){
	tbl.deleteRow(selectedRow);
	selectRow(tbl,selectedRow);
	calcS();
  }
}


//Move up
function keyboardUP(tbl){
  selectedRow = getSelectedIndex(tbl);
  lastRow = tbl.rows.length-1;
  if(lastRow > 0){
    if(selectedRow > 0){
	  tbl.rows[selectedRow].className="";
      if(selectedRow==1){
        tbl.rows[lastRow].className="selected";
	  }
	  else{
        tbl.rows[selectedRow-1].className="selected";
	  }
	}
	else{
      tbl.rows[lastRow].className="selected";
	}
  }
}


//Move down
function keyboardDOWN(tbl){
  selectedRow = getSelectedIndex(tbl);
  lastRow = tbl.rows.length-1;

  if(lastRow > 0){
    if(selectedRow > 0){
	  tbl.rows[selectedRow].className="";
      if(selectedRow==lastRow){
        tbl.rows[1].className="selected";
	  }
	  else{
        tbl.rows[selectedRow+1].className="selected";
	  }
	}
	else{
      tbl.rows[1].className="selected";
	}
  }
}

//Change an item quantity with the keyboard
function setQuantity(tbl,qty){
  selectedRow = getSelectedIndex(tbl);
  if(selectedRow > 0){
	document.getElementsByName('itemsqty[]')[selectedRow-1].value+=qty;
  }
}

//Clear an item quantity
function keyboardCLEAR(tbl){
  selectedRow = getSelectedIndex(tbl);
  if(selectedRow > 0){
	document.getElementsByName('itemsqty[]')[selectedRow-1].value="";
	calcS();
  }
}

//Convert an value to a currency value
function toCurrency(val){
val = (Math.round(parseFloat("0"+val)*100))/100;
sval = val.toString();
vals = sval.split(".");
if(vals[1]){
  cents = (vals[1]+"00").substring(0,2);
}
else{
  cents="00";
}
curr = vals[0]+"."+cents;
return curr;
}

//Calculate sales items
function calcS(){
  numitems=document.getElementById('tbl_sitems').rows.length-1;
  itemsqty = document.getElementsByName('itemsqty[]');
  itemstax = document.getElementsByName('itemstax[]');
  itemstotaltax = document.getElementsByName('itemstotaltax[]');
  itemsuprice = document.getElementsByName('itemsuprice[]');
  itemsprice = document.getElementsByName('itemsprice[]');
  itemstotalprice = document.getElementsByName('itemstotalprice[]');
  var tax = 0;
  var total = 0;
  for(i=0;i<numitems;i++){
    iqty = parseInt(itemsqty[i].value);	 	//Items quantity
    tip = iqty*toCurrency(parseFloat(itemsprice[i].value));  //Calculate total item price
    titax = iqty*toCurrency(parseFloat(itemsuprice[i].value))*toCurrency(parseFloat(itemstax[i].value)/100); 	//Calculate total item tax
    tax += titax;
    total += tip;
    itemstotaltax[i].value = toCurrency(titax);
    itemstotalprice[i].value = toCurrency(tip);
  }
  total = toCurrency(total);
  tax = toCurrency(tax);
  var subtotal = toCurrency(total-tax);
  document.getElementById('vtax').value=tax;
  document.getElementById('vsubtotal').value=subtotal;
  document.getElementById('vtotal').value=total;
}

//Change customer tab
function showCustomerDiv(t){
if(t==0){
document.getElementById('customerDiv1').style.display='none';
document.getElementById('customerDiv2').style.display='none';
}
if(t==1){
document.getElementById('customerDiv1').style.display='block';
document.getElementById('customerDiv2').style.display='none';
}
if(t==2){
document.getElementById('customerDiv2').style.display='block';
document.getElementById('customerDiv1').style.display='none';
}
}

//Perform sale checkout
function checkout(){
  document.getElementsByName('frm_sale')[0].submit();
}

//Add customer - Frontend (Uses Ajax)
function getCustomerValues(){
  var str = "firstname="+document.getElementsByName('firstname')[0].value+"&lastname="+document.getElementsByName('lastname')[0].value+"&account_number="+document.getElementsByName('account_number')[0].value+"&address="+document.getElementsByName('address')[0].value+"&city="+document.getElementsByName('city')[0].value+"&pcode="+document.getElementsByName('pcode')[0].value+"&state="+document.getElementsByName('state')[0].value+"&country="+document.getElementsByName('country')[0].value+"&phone_number="+document.getElementsByName('phone_number')[0].value+"&email="+document.getElementsByName('email')[0].value+"&comments="+document.getElementsByName('comments')[0].value;
  return str;
}

//The pageSet element
function setPages(npages,page){
	//Pages visible per set
	pvis = 5;
	// Present set
	pset = Math.ceil(page / pvis);
	// Number of page sets
  	psets = Math.ceil(npages / pvis);
	switch(pset){
		//If we are on page 1 can't have a 'previous' link
	  case 1:
		var tbl = document.createElement("table");
		var tblb = document.createElement("tbody");
		var row = document.createElement("tr");
		tbl.appendChild(tblb);
		tblb.appendChild(row);
		for(i=1;i < pvis+1 && ((pset-1)*pvis+i)<npages+1;i++){
	  		var tdata = document.createElement("td");
	  		tdata.innerHTML = '<a href="admin.php?action=products&page='+((pset-1)*pvis+i)+'">'+((pset-1)*pvis+i)+'</a>';
	  		tdata.className="pset";
	  		row.appendChild(tdata);
		}
		if(psets > pset){
	  	tdata = document.createElement("td");
	  	tdata.innerHTML = '<a href="javascript:setPages('+npages+','+((pset*pvis)+1)+')">Next</a>';
	  	tdata.className="pset";
	  	row.appendChild(tdata);
		}
		document.getElementById('pageset').innerHTML="";
		document.getElementById('pageset').appendChild(tbl);
		break;
		default:
		var tbl = document.createElement("table");
		var tblb = document.createElement("tbody");
		var row = document.createElement("tr");
		tbl.appendChild(tblb);
		tblb.appendChild(row);
		tdata = document.createElement("td");
	  	tdata.innerHTML = '<a href="javascript:setPages('+npages+','+((pset-1)*pvis)+')">Previous</a>';
	  	tdata.className="pset";
	  	row.appendChild(tdata);
		for(i=1;i < pvis+1 && ((pset-1)*pvis+i)<npages+1;i++){
	  		var tdata = document.createElement("td");
	  		tdata.innerHTML = '<a href="admin.php?action=products&page='+((pset-1)*pvis+i)+'">'+((pset-1)*pvis+i)+'</a>';
	  		tdata.className="pset";
	  		row.appendChild(tdata);
		}
		if(psets > pset){
	  	tdata = document.createElement("td");
	  	tdata.innerHTML = '<a href="javascript:setPages('+npages+','+((pset*pvis)+1)+')">Next</a>';
	  	tdata.className="pset";
	  	row.appendChild(tdata);
		}
		document.getElementById('pageset').innerHTML="";
		document.getElementById('pageset').appendChild(tbl);
		break;
	}
}