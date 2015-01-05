<center><ul class="pagination">
    <li><a href="http://mart.comyr.com/output/newm.php?page=<?php if($pg>1)echo $pg-1;?>"><span aria-hidden="true">&laquo;</span><span class="sr-only">Previous</span></a></li>
    <?php
	for($i=1;$i<=$count;$i++)
    {
	       ?>
                    
                    <li><a href="http://mart.comyr.com/output/newm.php?page=<?php echo $i;?>"><?php echo $i?></a></li>
                    
           <?php	
    }
    ?>
    <li><a href="http://mart.comyr.com/output/newm.php?page=<?php echo $pg+1;?>"><span aria-hidden="true">&raquo;</span><span class="sr-only">Next</span></a></li>
	</ul></center>