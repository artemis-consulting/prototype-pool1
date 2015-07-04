<?php include("include/_head.php");?>
<div class="container">
	<?php readfile("include/_header.html");?>
	<div class="adminhead-breadcrumb"><a href="/assignments"><i class="icon back"></i> assignments</a></div>
	<div class="content">
		<main>
			<h1 class="margin-bottom-quad">S.984 - Summary <small>Subject: Health Law</small></h1>
			<div class="summary">
				<ul>
					<li class="summary-item"><a href="">Can Reallocate</a></li>
					<li class="summary-item">Version: <span>80</span></li>
					<li class="summary-item"><span>xx</span> Days since last action</li>
					<li class="summary-item">State: <span>Lorem</span></li>
					<li class="summary-item">System Priority <span>7</span> <small><a href="">Edit My Priority</a></small></li>
				</ul>
			</div>
			<div id="tabs">
				<ul class="admintabs">
					<li>
					<a href="#all">All Information</a>
					</li>
					<li>
					<a href="#audit">Audit Trail</a>
					</li>
					<li>
					<a href="#summary">Summary Text</a>
					</li>
				</ul>
				<div id="all">
					<div class="details">
						<div class="detail notes">
							<h2>Notes</h2>
							<ul>
								<li>Note to self - for analyst only</li>
								<li>Note in audit trail - describe progress</li>
								<li>Notes from reviewer to analyst and back</li>
							</ul>
						</div>
						<div class="detail primary-bill">
							<h2>Primary Bill Metadata</h2>
							<ul>
								<li>S.984</li>
								<li>114</li>
								<li>{official bill title}</li>
								<li>{committees}</li>
								<li>Date of Congressional Action</li>
								<li>Days since sent to reviewer ?</li>
							</ul>
						</div>
						<div class="detail secondary-bill">
							<h2>Secondary Bill Metadata</h2>
							<ul>
								<li>Short Title</li>
								<li>Type of Bill/Profile (intro, action law)</li>
								<li>Days since last action</li>
								<li>Subj area</li>
								<li>GPO matched</li>
								<li>US Code</li>
								<li>Display Title (Cong.gov)</li>
								<li>Related bills added by CRS</li>
								<li>Statuses at Large</li>
								<li>Popular Title by CRS</li>
								<li>Big Notes</li>
							</ul>
						</div>
						<div class="detail assignment-details">
							<h2>Assignment Details</h2>
							<ul>
								<li>Date assigned: 2015-06-09T14:34:41Z / Days since assigned</li>
								<li>How bill assigned (system, reassign, LIS)</li>
								<li>Reviewer</li>
								<li>Task</li>
								<li># of Pages</li>
								<li>Chunk info</li>
								<li>Other stuff?</li>
							</ul>
						</div>
						<div class="detail intake-info">
							<h2>Intake Info / Activities</h2>
							<ul class="plain">
								<li><label><input type="checkbox"> Confirm assign / Request reassign</label></li>
								<li><label><input type="checkbox"> Topic Sentence added</label></li>
								<li><label><input type="checkbox"> Relationships added</label></li>
								<li><label><input type="checkbox"> Policy Terms Added</label></li>
								<li><label><input type="checkbox"> Titles Added</label></li>
							</ul>
							<button>Start Intake</button>
						</div>
						<div class="detail summary-info">
							<h2>Summary Info / Activities</h2>
							<ul>
								<li>Links to actions, such as:</li>
								<li>Write new, Copy existing / edit copied</li>
								<li>summary/ Reis written summary</li>
								<li>Summary text: avail via tab, since it can be long</li>
								<li>Metadata: Type: New/Copied/Copied + Edited /</li>
								<li>Revised. Or Flag indicating copied summary</li>
								<li>If copied, Bill #, version of copied summary</li>
								<li>Date of latest activity ?
							</ul>
							<button>Start Summary</button>
						</div>
						<div class="detail subject-terms">
							
							<h2>Subject Terms</h2>
							<ul>
								<li>Link to apply subject terms (550)</li>
								<li>Show terms that have been applied if avail</li>
							</ul>
							<button>Start Subject</button>
						</div>
					</div>
					<!-- end details -->
				</div>
				<div id="audit">
					<div class="table-wrapper">
						<table class="admin-inbox">
							<thead>
								<tr>
									<th>Date/Time</th>
									<th>Username</th>
									<th>Activity</th>
									<th>Change Details</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>June 9, 2015 6:09pm</td>
									<td>rioh</td>
									<td>Changed state</td>
									<td>
										<ul>
											<li><strong>status</strong> was changed from "<strong>assigned</strong>" to "<strong>in_progress</strong>"</li>
											<li><strong>update_date</strong> was changed from "<strong>2015-06-09T17:03:50.278Z</strong>" to "<strong>2015-06-09T18:09:11.672Z</strong>"</li>
											<li><strong>assignment_start_date</strong> was changed from "<strong>2015-06-09T15:38:49Z</strong>" to "<strong>2015-06-09T18:09:11.671</strong>"</li>
										</ul>
									</td>
								</tr>
								<tr>
									<td>June 9, 2015 5:03pm</td>
									<td>rioh</td>
									<td>Changed state</td>
									<td>
										<ul>
											<li><strong>status</strong> was changed from "<strong>Assigned</strong>" to "<strong>assigned</strong>"</li>
											<li><strong>update_date</strong> was changed from "<strong>2015-06-09T17:02:59.557Z</strong>" to "<strong>2015-06-09T17:03:50.278Z</strong>"</li>
										</ul>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div id="summary">
					<h2>There are no summaries for S.984 (114)</h2>
					<textarea id="summary-text" class="form-control"></textarea>
					<button class="btn btn-primary" type="submit">save</button>
				</div>
			</div>
			<!-- end tabs -->
		</main>
	</div><!-- end content -->
</div><!-- end container -->
</body>
</html>

