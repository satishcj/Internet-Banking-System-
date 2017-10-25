	    function checkBlnk(c1,msg)
		{
			
			x = c1.value;
			len = x.length;
			if(len==0)
			{
					alert(msg);
					c1.focus();
					return false;
			}
			
			return true;
			
		}
		
		function checkNum(c1,msg)
		{
			x=c1.value;
			if(isNaN(x))
			{
				alert(msg);
				c1.focus();
				return false;
			}

			return true;
		}
		
		function checkAge(c1,msg)
		{
			x=c1.value;
			
			if(x<=0)
			{
				alert(msg);
				c1.focus();
				return false;
			}
			return true;
		}
		
		function checkLen(c1,msg)
		{
			
			x = c1.value;
			
			len = x.length;
			
			if(len<6)
			{
					alert(msg);
					c1.focus();
					return false;
				
			}
			return true;
		}
		
		function checkPassCpass(c1,c2,msg)
		{
			
			x = c1.value;
			y = c2.value;
			
			if(x==y)
			{
					return true;
			}
			
			
					alert(msg);
					c1.value="";
					c2.value="";
					c1.focus();
					return false;
			
			
		}
		
		function checkGen(c1,msg)
		{
			
			if(!c1[0].checked && !c1[1].checked)
			{
				c1[0].focus;	
				alert(msg);
				return false;
			}
			
			return true;
			
		}
		function checkphoneLen(c1,msg)
		{
			
			x = c1.value;
			
			len = x.length;
			
			if(len!=10)
			{
					alert(msg);
					c1.focus();
					return false;
				
			}
			return true;
		}
		 function checkemail(c1,msg)
                {
                var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/; 
                var x=emailPattern.test(c1.value); 
                    if(x==false)
                    {
                                       alert(msg);
									   c1.focus();
                                       return false;
                    }
                    return true;
				}