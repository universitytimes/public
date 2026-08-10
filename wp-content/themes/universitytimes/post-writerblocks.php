<?php
													
															$writername = get_post_meta( get_the_ID(), '_writer_name', true );
															$positionname = get_post_meta( get_the_ID(), '_position_name', true );
															$writername2 = get_post_meta( get_the_ID(), '_writer_name_two', true );
															$writername3 = get_post_meta( get_the_ID(), '_writer_name_three', true );
															$writername4 = get_post_meta( get_the_ID(), '_writer_name_four', true );
															$writername5 = get_post_meta( get_the_ID(), '_writer_name_five', true );
																
																
															
																
															$writer1page = get_page_by_title( $writername, "OBJECT", 'by' );
															$writer1pagestatus = get_post_status( $writer1page );
															$writer1page_ID = $writer1page->ID;
															$getwriterpage1url = get_post_permalink( $writer1page_ID );
															
															$writer2page = get_page_by_title( $writername2, "OBJECT", 'by' );
															$writer2pagestatus = get_post_status( $writer2page );
															$writer2page_ID = $writer2page->ID;
															$getwriterpage2url = get_post_permalink( $writer2page_ID );
															
															$writer3page = get_page_by_title( $writername3, "OBJECT", 'by' );
															$writer3pagestatus = get_post_status( $writer3page );
															$writer3page_ID = $writer3page->ID;
															$getwriterpage3url = get_post_permalink( $writer3page_ID );
															
															$writer4page = get_page_by_title( $writername4, "OBJECT", 'by' );
															$writer4pagestatus = get_post_status( $writer4page );
															$writer4page_ID = $writer4page->ID;
															$getwriterpage4url = get_post_permalink( $writer4page_ID );
															
															$writer5page = get_page_by_title( $writername5, "OBJECT", 'by' );
															$writer5pagestatus = get_post_status( $writer5page );
															$writer5page_ID = $writer1page->ID;
															$getwriterpage5url = get_post_permalink( $writer1page_ID );
															
															
															
												if ($writer1pagestatus !== "publish" || $writer1page == null) {
													
													$getwriterpage1url = "";
													
												}
												
												if ($writer2pagestatus !== "publish" || $writer2page == null) {
													
													$getwriterpage2url = "";
													
												}
												
												if ($writer3pagestatus !== "publish" || $writer3page == null) {
													
													$getwriterpage3url = "";
													
												}
												
												if ($writer4pagestatus !== "publish" || $writer4page == null) {
													
													$getwriterpage4url = "";
													
												}
												
												
												if ($writer5pagestatus !== "publish" || $writer5page == null) {
													
													$getwriterpage5url = "";
													
												}			
																
																
																
																
													
													
							if ($writername5 == "" and $writername4 == "" and $writername3 == "" and $writername2 == "" and $writername !== "") {
							
							
													
							echo '<span class="onebigauthorname">';
							
							
							if($getwriterpage1url !== "") {
									
								echo '<span class="authoruppercase"><a href="'.$getwriterpage1url.'">'.get_post_meta( get_the_ID(), '_writer_name', true ).'</a></span>';
									
								}
								
								
								 else 	{
									
											echo '<span class="authoruppercase">'.get_post_meta( get_the_ID(), '_writer_name', true ).'</span>';	
								
										}
									
									 
								echo '<span class="positionname">'.$positionname.'</span></span>'; 
													 
													 
							
							
							
							}
													 
													 
							elseif ($writername5 == "" and $writername4 == "" and $writername3 == "" and $writername2 !== "" and $writername !== "") { ?>
														 
														 
						<span class="onebigauthorname">
						
						<span class="authoruppercase">
						
						<?php if($getwriterpage1url !== "") { echo '<a href="'.$getwriterpage1url.'">'.$writername.'</a>'; } 
						
							else {
								
								echo $writername;
								
							}
						
						
						?>

					

												
						</span> and 
						
						
						<span class="authoruppercase">
						
						
						<?php if($getwriterpage2url !== "") { echo '<a href="'.$getwriterpage2url.'">'.$writername2.'</a>'; } 
						
							else {
								
								echo $writername2;
								
							}
						
						
						?>
						
						
						
						</span>
						
						
						</span>
						
						
						
														 
														 
						<?			 }
													 
													 
													  elseif ($writername5 == "" and $writername4 == "" and $writername3 !== "" and $writername2 !== "" and $writername !== "") { ?>
														 
													<span class="onebigauthorname">
						
						<span class="authoruppercase">
						
						<?php if($getwriterpage1url !== "") { echo '<a href="'.$getwriterpage1url.'">'.$writername.'</a>,'; } 
						
							else {
								
								echo $writername.',';
								
							}
						
						
						?>

					

												
						</span>
						
						
						<span class="authoruppercase">
						
						
						<?php if($getwriterpage2url !== "") { echo '<a href="'.$getwriterpage2url.'">'.$writername2.'</a>'; } 
						
							else {
								
								echo $writername2;
								
							}
						
						
						?>
						
						
						
						</span> and
						
						<span class="authoruppercase">
						
						
						<?php if($getwriterpage3url !== "") { echo '<a href="'.$getwriterpage3url.'">'.$writername3.'</a>'; } 
						
							else {
								
								echo $writername3;
								
							}
						
						
						?>
						
						
						
						</span>
						
						
						</span>

														 
														 
											<?php		 }
													 
													 elseif ($writername5 == "" and $writername4 !== "" and $writername3 !== "" and $writername2 !== "" and $writername !== "") { ?>
														 
														 
											<span class="onebigauthorname">
						
						<span class="authoruppercase">
						
						<?php if($getwriterpage1url !== "") { echo '<a href="'.$getwriterpage1url.'">'.$writername.'</a>,'; } 
						
							else {
								
								echo $writername.',';
								
							}
						
						
						?>

					

												
						</span>
						
						
						<span class="authoruppercase">
						
						
						<?php if($getwriterpage2url !== "") { echo '<a href="'.$getwriterpage2url.'">'.$writername2.'</a>,'; } 
						
							else {
								
								echo $writername2.',';
								
							}
						
						
						?>
						
						
						
						</span>
						
						<span class="authoruppercase">
						
						
						<?php if($getwriterpage3url !== "") { echo '<a href="'.$getwriterpage3url.'">'.$writername3.'</a>'; } 
						
							else {
								
								echo $writername3;
								
							}
						
						
						?>
						
						
						
						</span> and
						
						<span class="authoruppercase">
						
						
						<?php if($getwriterpage4url !== "") { echo '<a href="'.$getwriterpage4url.'">'.$writername4.'</a>'; } 
						
							else {
								
								echo $writername4;
								
							}
						
						
						?>
						
						
						
						</span>
						
						
						</span>				
														
														
														
														
														
														
														 
														 
										<?php			 }     
													 
													 
													 elseif ($writername5 !== "" and $writername4 !== "" and $writername3 !== "" and $writername2 !== "" and $writername !== "") {  ?>
												
												
														<span class="onebigauthorname">
						
						<span class="authoruppercase">
						
						<?php if($getwriterpage1url !== "") { echo '<a href="'.$getwriterpage1url.'">'.$writername.'</a>,'; } 
						
							else {
								
								echo $writername.',';
								
							}
						
						
						?>

					

												
						</span>
						
						
						<span class="authoruppercase">
						
						
						<?php if($getwriterpage2url !== "") { echo '<a href="'.$getwriterpage2url.'">'.$writername2.'</a>,'; } 
						
							else {
								
								echo $writername2.',';
								
							}
						
						
						?>
						
						
						
						</span>
						
						<span class="authoruppercase">
						
						
						<?php if($getwriterpage3url !== "") { echo '<a href="'.$getwriterpage3url.'">'.$writername3.'</a>,'; } 
						
							else {
								
								echo $writername3.',';
								
							}
						
						
						?>
						
						
						
						</span>
						
						<span class="authoruppercase">
						
						
						<?php if($getwriterpage4url !== "") { echo '<a href="'.$getwriterpage4url.'">'.$writername4.'</a> and'; } 
						
							else {
								
								echo $writername4;
								
							}
						
						
						?>
						
						</span> and
						
						<span class="authoruppercase">
						
						
						<?php if($getwriterpage5url !== "") { echo '<a href="'.$getwriterpage5url.'">'.$writername5.'</a>'; } 
						
							else {
								
								echo $writername5;
								
							}
						
						
						?>
						
						
						
						</span>
						
						
						</span>				
									
												
												
												
														 
														 
									<?php				 }   ?>