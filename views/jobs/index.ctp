<?php $html->css('jobs', null, array(), false); ?>

<div class="page">

<h2><?php echo $this->pageTitle = __('Jobs', true)?></h2>

	<?php
		$count = 0;
		if (!isset($jobs)) {
			$jobs = 'Job board currently unavailable. Please come back again later.';
		} elseif (empty($jobs)) {
			$jobs = 'There are no CakePHP related jobs posted right now.';
		} else {
			$count = count($jobs);
		}
	?>
	<a id="post-a-job" href="http://www.eliteopensourcejobs.com/jobs/add/community_id:48075b46-da18-4009-a658-83a14dddecbf">Post a job</a>
	<table class="rounded" cellspacing="0">
		<thead>
			<tr>
				<th>Country</th>
				<th>Company</th>
				<th>Title</th>
			</tr>
		</thead>
		<tbody>
		<?php foreach ((array)$jobs as $job): ?>
			<tr>
				<?php if (is_string($job)): ?>
					<td colspan="3"><?php echo $job; ?></td>
					<?php continue; ?>
				<?php endif; ?>
				<td><?php echo h($job['Job']['location']); ?></td>
				<td><?php echo $html->link($job['Job']['company'], $job['Job']['url']); ?></td>
				<td><?php echo $html->link($job['Job']['title'], $job['Job']['url']); ?></td>
			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>
	<div class="table-foot">
		<span class="jobs-powered-by">Powered by <a href="http://www.eliteopensourcejobs.com/">EliteOpenSourceJobs.com</a>.</span>
		<?php if ($count): ?>
			<strong>Showing <?php echo sprintf('%s - %d of %d', 1, $count, $count); ?></strong>
		<?php endif; ?>
		<!-- <a href="#" class="job-prev">Prev</a> <a href="#" class="job-next">Next</a> -->
	</div>
</div>