<?php include("session.php"); ?>
	<?php include("header.php"); ?>	
            <div id="content">
                <article class="post clearfix">                    
                    <?php include("sidebar.php"); ?>                    
                        <div id="mainContent">


                            <form action="surveydatainsert.php" method="post">
                                <table border="1" width="550" height="400"cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                        <td>
                                            <p>
                                            <center>
                                                <label >Create Survey Name
                                                    <input type="text" name="surveytitle" id="surveytitle" />
                                                    <input type="submit" name="button" id="button" value="Create" />
                                                </label>
                                            </center>
                                            </p>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>

                            </form>
                        
		</div>
            </article>
	</div>	
<?php include("footer.php"); ?>