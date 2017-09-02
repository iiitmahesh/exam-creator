	function c_test(){
		var a = ctest.testn.value;
		var b=ctest.category.value;
		var c=ctest.noqu.value;
		var d=ctest.kwrds.value;
		var e=ctest.hrs.value;
		var f=ctest.mins.value;	
		if(a=="" || a=="NULL"){
			ctest.testn.focus();
			return false;
		}
		if(b=="Select"){
			ctest.category.focus();
			return false;
		}
		if(c=="" || c=="NULL"){
			ctest.noqu.focus();
			return false;
		}
		if(d=="" || d=="NULL"){
			ctest.kwrds.focus();
			return false;
		}
		if(e=="" || e=="NULL"){
			ctest.hrs.focus();
			return false;
		}
		if(f=="" || f=="NULL"){
			ctest.mins.focus();
			return false;
		}
	}
