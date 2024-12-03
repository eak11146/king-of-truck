<?php 
   function pagination($query, $per_page = 10,$page = 1,$exurl, $url = '?'){        
    	$query = "SELECT COUNT(*) as `num` FROM {$query}";
    	$row = mysql_fetch_array(mysql_query($query));
    	$total = $row['num'];
        $adjacents = "3";  //3
		 
    	$page = ($page == 0 ? 1 : $page);  
    	$start = ($page - 1) * $per_page;								
		
    	$prev = $page - 1;							
    	$next = $page + 1;
        $lastpage = ceil($total/$per_page);
    	$lpm1 = $lastpage - 1;
    	
    	$pagination = "";
		 $adj2 = $adjacents * 2; //2
		 $xurl = "";
		 $xurl .= $exurl;
		 
    	if($lastpage > 1)
    	{	
    		$pagination .= "<ul class='pagination'>";
         
    		if ($lastpage < 2 + ($adj2))
    		{	
    			for ($counter = 1; $counter <= $lastpage; $counter++)
    			{
					 
    				if ($counter == $page)
    					$pagination.= "<li class='active'><a>$counter</a></li>";
    				else
    					$pagination.= "<li><a href='{$url}page=$counter".$xurl."'>$counter</a></li>";					
    			}
    		}
    		elseif($lastpage > 2 + ($adj2))
    		{
    			if($page < 1 + ($adj2))		
    			{
					
    				for ($counter = 1; $counter < 2 + ($adj2); $counter++)
    				{
						 
    					if ($counter == $page)
    						$pagination.= "<li class='active'><a >$counter</a></li>";
    					else
    						$pagination.= "<li><a href='{$url}page=$counter".$xurl."'>$counter</a></li>";					
    				}
    				$pagination.= "<li class='disabled'><a>...</a></li>";
    				//$pagination.= "<li><a href='{$url}page=$lpm1'>$lpm1</a></li>";
    				$pagination.= "<li><a href='{$url}page=$lastpage".$xurl."'>$lastpage</a></li>";		
    			}
			 
    			elseif($lastpage - ($adj2) > $page && $page > ($adj2))
    			{
    				$pagination.= "<li><a href='{$url}page=1".$xurl."'>1</a></li>";
    				// $pagination.= "<li><a href='{$url}page=2".$xurl."'>2</a></li>";
    				$pagination.= "<li class='disabled'><a>...</a></li>";
    				for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
    				{
    					if ($counter == $page)
    						$pagination.= "<li class='active' ><a  >$counter</a></li>";
    					else
    						$pagination.= "<li><a href='{$url}page=$counter".$xurl."'>$counter</a></li>";					
    				}
    				$pagination.= "<li class='disabled'><a>...</a></li>";
    			//	$pagination.= "<li><a href='{$url}page=$lpm1'>$lpm1</a></li>";
    				$pagination.= "<li><a href='{$url}page=$lastpage".$xurl."'>$lastpage</a></li>";		
    			}
    			else
    			{
    				$pagination.= "<li><a href='{$url}page=1".$xurl."'>1</a></li>";
    				// $pagination.= "<li><a href='{$url}page=2".$xurl."'>2</a></li>";
    				$pagination.= "<li class='disabled'><a>...</a></li>";
    				for ($counter = $lastpage - (2 + ($adj2)); $counter <= $lastpage; $counter++)
    				{
    					if ($counter == $page)
    						$pagination.= "<li class='active'><a>$counter</a></li>";
    					else
    						$pagination.= "<li><a href='{$url}page=$counter'>$counter</a></li>";					
    				}
    			}
				 
    		}
    		
    		if ($page < $counter - 1){ 
    			$pagination.= "<li><a href='{$url}page=$next".$xurl."'>Next</a></li>";
                $pagination.= "<li><a href='{$url}page=$lastpage".$xurl."'>Last</a></li>";
    		}else{
    			// $pagination.= "<li class='active'><a>Next</a></li>";  // last 
             //   $pagination.= "<li class='active'><a>Last</a></li>";
            }
			$pagination .= "<li class='disabled'><a >Page $page of $lastpage</a></li>";
    		$pagination.= "</ul>\n";		
    	}
    
    
        return $pagination;
    } 
?>