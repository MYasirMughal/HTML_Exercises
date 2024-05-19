// Open New Window From Flash

		function openNewWindow(URLtoOpen, windowName, windowFeatures)
		 { newWindow=window.open(URLtoOpen, windowName, windowFeatures); }



// Open New Window 
                    
                function newwin(url,w,h)  {
                if((w==0) && (h==0))
                {
                    window.open(url,"_blank","status=0,scrollbars=1,resizable=1,toolbar=1,location=0,width="+self.outerWidth+",height="+self.outerHeight);   }
              
                            else
                {window.open(url,"_blank","status=0,scrollbars=1,resizable=0,toolbar=0,location=0,width="+w+",height="+h);    }
                    }
		//<A href="javascript:newwin('FILE NAME.html',500,500)"> LINK </A> 


		
// Open New Window - Back and Forward buttons
                    
                function newwin1(url,w,h)  {
                if((w==0) && (h==0))
                {
                    window.open(url,"_blank","status=0,scrollbars=1,resizable=1,toolbar=1,location=0,width="+self.outerWidth+",height="+self.outerHeight);   }
              
                            else
                {window.open(url,"_blank","status=0,scrollbars=1,resizable=0,toolbar=1,location=0,width="+w+",height="+h);    }
                    }
		//<A href="javascript:newwin('FILE NAME.html',500,500)"> LINK </A> 		
		

 // Close Window

		function closeWindow()  {
                window.close(); }
		//<a href="javascript:closeWindow()">Close Window </a>
 



 // History (text)
                function goHist(a) 
               {
               	history.go(a);      // Go back one.
                }
                //<javascript:history.go(-1)>


//Print
		 function AutoPrint()
                  {
                    if( document.layers )
                    {
                      window.location.href = "/cgi-bin/ia_find?link=btwn/twn-map_print&mapsize=large&event=options_update&uid=u8re87c58exjp0ae:8lu07l1yr&SNVData=3mad3-96,hr%3bbg90rg%3d%3d2l14y0g.hqu%3b%28ng4%2bO%12MVH%12%2bCMJS%28RXTVVX%3aX%13%3dfrwqf_sl6r_F%15%28x56y25%3a_n108n9a%28l%241w-u";
                    }
                    else
                    {
                      window.print('');
                    }
                  }
     		//<a href="javascript:AutoPrint()">Print </a>
			

// Add to Favorites

		<a href="javascript:addfav()">Add To Favorites</a>

// End -->
				
			
			
//Password

			function password () {
			var password = form1.textfield.value
			if (password != null) {
			window.location.href= "http://www.crystaldi.com/clients/" + password + "/";
			var URL = window.location.href;
			window.open(URL);
			}}	