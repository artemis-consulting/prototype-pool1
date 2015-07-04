<?php include("include/_head.php");?>
<div class="container-temp">
	<?php readfile("include/_lochead.html");?>
	<div class="content">
		<main>
			<article class="row responsive01">
				<h1 class="margin-bottom-quad">Test page</h1>
				
				<h2>Headings</h2>
				<h1>H1 heading</h1>
				<h2>H2 heading</h2>
				<h3>H3 heading</h3>
				<h4>H4 heading</h4>
				<h5>H5 heading</h5>
				<h6>H6 heading</h6>
				<hr />
				
				<h2>Form</h2>
				<form action="#" method="post">
					<fieldset>
						<legend>Legend (Fieldset)</legend>
						<ul class="inline">
							<li>
								<label for="test_checkbox_1"><input id="test_checkbox_1" name="test_checkbox_1" type="checkbox"> Test checkbox 1</label>
							</li>
							<li>
								<input id="test_checkbox_2" name="test_checkbox_2" type="checkbox">
								<label for="test_checkbox_2">Test checkbox 2</label>
							</li>
							<li>
								<input id="test_checkbox_3" name="test_checkbox_3" type="checkbox">
								<label for="test_checkbox_3">Test checkbox 3</label>
							</li>
							<li>
								<input id="test_checkbox_4" name="test_checkbox_4" type="checkbox" disabled>
								<label for="test_checkbox_4" class="disabled">Test checkbox &quot;disabled&quot;</label>
							</li>
							<li>
								<input id="test_checkbox_5" name="test_checkbox_5" type="checkbox" readonly checked>
								<label for="test_checkbox_5" class="readonly">Test checkbox &quot;readonly&quot;</label>
							</li>
						</ul>
					</fieldset>
					<fieldset>
						<legend>Lorem ipsum</legend>
						<ul class="plain">
							<li>
								<input id="test_checkbox_1b" name="test_checkbox_1b" type="checkbox">
								<label for="test_checkbox_1b">Test checkbox 1b</label>
							</li>
							<li>
								<input id="test_checkbox_2b" name="test_checkbox_2b" type="checkbox">
								<label for="test_checkbox_2b">Test checkbox 2b</label>
							</li>
							<li>
								<input id="test_checkbox_3b" name="test_checkbox_3b" type="checkbox">
								<label for="test_checkbox_3b">Test checkbox 3b</label>
							</li>
						</ul>
					</fieldset>
					<fieldset>
						<legend>Lorem ipsum</legend>
						<ul class="inline">
							<li>
								<input id="test_radio_1" name="test_radio_group" type="radio">
								<label for="test_radio_1">Test radio 1</label>
							</li>
							<li>
								<input id="test_radio_2" name="test_radio_group" type="radio">
								<label for="test_radio_2">Test radio 2</label>
							</li>
							<li>
								<input id="test_radio_3" name="test_radio_group" type="radio">
								<label for="test_radio_3">Test radio 3</label>
							</li>
						</ul>
					</fieldset>
					<fieldset>
						<legend>Lorem ipsum</legend>
						<ul class="plain">
							<li>
								<input id="test_radio_1b" name="test_radio_group_b" type="radio">
								<label for="test_radio_1b">Test radio 1b</label>
							</li>
							<li>
								<input id="test_radio_2b" name="test_radio_group_b" type="radio">
								<label for="test_radio_2b">Test radio 2b</label>
							</li>
							<li>
								<input id="test_radio_3b" name="test_radio_group_b" type="radio">
								<label for="test_radio_3b">Test radio 3b</label>
							</li>
							<li>
								<input id="test_radio_4b" name="test_radio_group_b" type="radio" disabled>
								<label for="test_radio_4b" class="disabled">Test radio 4b  &quot;disabled&quot;</label>
							</li>
							<li>
								<input id="test_radio_5b" name="test_radio_group_b" type="radio" readonly checked>
								<label for="test_radio_5b" class="readonly">Test radio 5b  &quot;readonly&quot;</label>
							</li>
						</ul>
					</fieldset>
					<p>
						<label for="select_dd">Select drop-down</label>
						<br />
						<select id="select_dd" name="select_dd">
							<optgroup label="Group 1">
								<option value="1">Some text goes here for select menu</option>
								<option value="2">Another choice could be here</option>
								<option value="3">Yet another item to be chosen</option>
							</optgroup>
							<optgroup label="Group 2">
								<option value="4">Some text goes here</option>
								<option value="5">Another choice could be here</option>
								<option value="6">Yet another item to be chosen</option>
							</optgroup>
							<optgroup label="Group 3">
								<option value="7">Some text goes here</option>
								<option value="8">Another choice could be here</option>
								<option value="9">Yet another item to be chosen</option>
							</optgroup>
						</select>
						<input id="text_inline" name="text_inline" type="text" placeholder="placeholder" />
						<input value="Input Button" type="button" />
						<button>Button Tag</button>
						<a href="#" class="button" role="button">Link Button</a>
					</p>
					<p>
						<label for="select_multi">Select multiple <sup>No styling scrollbar allowed</sup></label>
						<br />
						<select id="select_multi" name="select_multi" multiple="multiple" size="10" style="width: 50%;">
							<optgroup label="Group 1">
								<option value="1">Some text goes here</option>
								<option value="2">Another choice could be here</option>
								<option value="3">Yet another item to be chosen</option>
							</optgroup>
							<optgroup label="Group 2">
								<option value="4">Some text goes here</option>
								<option value="5">Another choice could be here</option>
								<option value="6">Yet another item to be chosen</option>
							</optgroup>
							<optgroup label="Group 3">
								<option value="7">Some text goes here</option>
								<option value="8">Another choice could be here</option>
								<option value="9">Yet another item to be chosen</option>
							</optgroup>
						</select>
					</p>
					<p>
						<label for="textarea">Textarea</label>
						<br />
						<textarea style="width:50%;" id="textarea" name="textarea" rows="5" placeholder="This is an example of HTML5 placeholder text."></textarea>
					</p>
					<p>
						<label for="url">Text</label>
						<br />
						<input id="text_inline" name="text_inline" type="text" value="" placeholder="placeholder" />
						<input id="text_inline" name="text_inline" type="text" value="disabled" disabled />
						<input id="text_inline" name="text_inline" type="text" value="readonly" readonly />
					</p>
					<p>
						<label for="search">
						Search
						</label>
						<br />
						<input id="search" name="search" type="search">
					</p>
					<p>
						<label for="url">URL</label>
						<br />
						<input id="url" name="url" value="" type="url">
					</p>
					<p>
						<label for="email">Email</label>
						<br />
						<input id="email" name="email" placeholder="name@example.com" type="email">
					</p>
					<p>
						<label for="password">Password</label>
						<br />
						<input id="password" name="password" placeholder="Alphanumeric123!" type="password">
					</p>
					<p>
						<label for="datetime-local">Datetime local</label>
						<br />
						<input id="datetime-local" name="datetime-local" type="datetime-local">
					</p>
					<p>
						<label for="number">
						Number
						</label>
						<br />
						<input id="number" name="number" min="0" max="999" step="1" type="number">
					</p>
					<p>
						<label for="tel">
						Tel (phone)
						</label>
						<br />
						<input id="tel" name="tel" type="tel">
					</p>
					<p>
						<label for="datetime">
						Datetime
						</label>
						<br />
						<input id="datetime" name="datetime" type="datetime">
					</p>
					<p>
						<label for="date">
						Date
						</label>
						<br />
						<input id="date" name="date" type="date">
					</p>
					<p>
						<label for="month">
						Month
						</label>
						<br />
						<input id="month" name="month" type="month">
					</p>
					<p>
						<label for="range">Range <sup>No styling allowed</sup></label>
						<br />
						<input id="range" name="range" type="range">
					</p>
					<p>
						<label for="file">File upload <sup>No styling allowed</sup></label>
						<br />
						<input id="file" name="file" type="file">
					</p>
					<p>
						<label for="file">Buttons - default</label>
						<br />
						<input value="Input - Submit" type="submit">
						&nbsp;
						<input value="Input - Button" type="button">
						&nbsp;
						<input value="Input - Reset" type="reset">
						&nbsp;
						<button>Button tag</button>
						&nbsp;
						<a href="#" class="button" role="button">Link Button</a>
					</p>
					<p>
						<label for="file">Buttons - default - disabled</label>
						<br />
						<input value="Input - Submit" type="submit">
						&nbsp;
						<input value="Input - Button" type="button">
						&nbsp;
						<input value="Input - Reset" type="reset">
						&nbsp;
						<button>Button tag</button>
						&nbsp;
						<a href="#" class="button" role="button">Link Button</a>
					</p>
					<p>
						<label for="file">Button - class=&quot;button-primary&quot;</label>
						<br />
						<input value="Input - Submit" type="submit" class="button-primary">
						&nbsp;
						<input value="Input - Button" type="button" class="button-primary">
						&nbsp;
						<button class="button-primary">Button tag</button>
						&nbsp;
						<a href="#" class="button button-primary" role="button">Link Button</a>
					</p>
					<p>
						<label for="file">Button - class=&quot;button-tertiary&quot;</label>
						<br />
						<input value="Input - Submit" type="submit" class="button-tertiary">
						&nbsp;
						<input value="Input - Button" type="button" class="button-tertiary">
						&nbsp;
						<button class="button-tertiary">Button tag</button>
						&nbsp;
						<a href="#" class="button button-tertiary" role="button">Link Button</a>
					</p>
				</form>
				
				<hr />
				
				<h2>Form example 1</h2>
				<form>
					<p>
						<label for="pageSort">Sort by</label>
						<select name="pageSort" class="" id="pageSort">
							<option value="">Relevancy</option>
							<option value="">Newest to Oldest</option>
						</select><!--
						!--><button id="pageSortGo" type="button" class="button-tertiary">GO</button>
						&nbsp;&nbsp;&nbsp;&nbsp;
						<label for="pageSizeTop">Results per page</label>
						<select name="pageSizeTop" class="" id="pageSizeTop">
							<option value="">25</option>
							<option value="">50</option>
						</select><!--
						!--><button id="pageSizeGo" type="button" class="button-tertiary">GO</button>
					</p>
				</form>
				
				<hr />
				
				<h2>Form example 2</h2>
				<form action="action_page.php">
					<fieldset>
						<legend>Form example legend</legend>
						<p>
							<label for="email_2">Email</label>
							<br />
							<input id="email_2" name="email_2" placeholder="" type="email">
						</p>
						<p>
							<label for="password_2">Password</label>
							<br />
							<input id="password_2" name="password_2" placeholder="" type="password">
						</p>
						<p>
							<input value="Sign in" type="submit" class="button-primary">
						</p>
						<p class="checkbox">
							<label>
							<input type="checkbox"> Remember me
							</label>
						</p>
						<p>
							<a href="/account/password-reset-request">Forgot password</a>? &nbsp; &nbsp;
							<a href="/account/register/">Create an account</a>
						</p>
					</fieldset>
				</form>
				
			</article>
		</main>
	</div><!-- end content -->
	<?php readfile("include/_locfoot.html");?>
</div><!-- end container -->
</body>
</html>
