<?php 
include('config.php');
$pageName = 'index';
$pageTitle = 'Home';
include('./includes/header.php');
?>

	<div id="content">
		<p><strong>This is StoryDrop.</strong> A revolutionizing web platform for publishing books (with PDF file type) online.</p>

		<h3>Why do we need it?</h3>
		<p>Many manuscripts from authors, writers and creators are often rejected by publishers day by day:</p>

		<p align="center">
			<img alt="The Peanuts - Send me 50 thousand dollars" title="The Peanuts - Send me 50 thousand dollars" src="https://i.pinimg.com/736x/ef/76/6e/ef766e9edc191052730349bb71cf0e4d--writer-humor-writing-inspiration.jpg" width="500"/>
			<br/>
			<small>Copyright &copy; Charles M. Schulz / United Feature Syndicate, Inc. All rights reserved.</small>
		</p>

		<p>The StoryDrop platform allows everyone publishing their <strong>OWN</strong> story and (e-)books effortless and hurdles-free.</p>

		<h3>How does it work?</h3>
		<ul>
			<li>The platform maintainer review(s) newly uploaded books in the <code>uploads/new/</code> folder.</li>
			<li>After a fast and open verification process the books are going to be published online at <code>uploads/verified/</code>.</li>
		</ul>

		<p><strong>No more publishing companies or dastardly editors that are greedy for money!</strong></p>

		<h3>Vision</h3>
		<blockquote>
			<strong>StoryDrop makes book publishing more simplified and more democratised.</strong>
			<br/>
			<p align="right"><i>- <a href="https://about.suriyaa.tk/">Suriyaa R. Sundararuban</a> (Creator of StoryDrop)</i></p>
		</blockquote>

		<h3>Story behind</h3>
		<p>StoryDrop is the final project made by <a href="https://about.suriyaa.tk/">Suriyaa R. Sundararuban</a> - a student at the <a href="https://www.tum.de/">Technische Universität München (TUM)</a> - for <a href="https://www.harvard.edu/">Harvard's</a> <a href="https://cs50.harvard.edu/">CS50x 2018</a> course.</p>
	</div>

<?php include('./includes/footer.php'); ?>
