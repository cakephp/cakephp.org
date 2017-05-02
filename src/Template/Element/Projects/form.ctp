<?php $this->Form->unlockField('screen_monitor_images.file') ?>
<?php $this->Form->unlockField('perspective_image.file') ?>

<?= $this->Form->create($project, ['type' => 'file']) ?>
	<?= $this->Form->hidden('id') ?>

	<div class="well back-red">
		<div class="row">
			<div class="col-sm-12 col-md-8 col-lg-6 projects form">
				<?php
					echo $this->Form->input('title', ['class' => 'form-control']);
					echo $this->Form->input('description');
					echo $this->Form->input('brief_description', ['class' => 'form-control']);
					echo $this->Form->input('website', ['class' => 'form-control']);
					echo $this->Form->input('tags', [
						'class' => 'form-control taggable-select',
						'multiple' => true,
						'label' => 'Categories',
						'value' => $project->tags_array
					]);
					echo $this->Form->input('technologies', ['class' => 'form-control']);
					echo $this->Form->input('is_highlighted');
					echo $this->Form->input('is_showcase');
					echo $this->Form->input('perspective_image.file', [
						'type' => 'file',
						'label' => __('Perspective Image'),
						'required' => false,
						'class' => 'image-preview-input',
						'data-preview' => 'perspective-image-preview'
					]);
				?>
				<div class="row">
					<div class="col-sm-12 col-md-8 col-lg-6" id="perspective-image-preview">
						<?php if (count($project->perspective_image)): ?>
							<?= $this->Showcase->image($project->perspective_image, [
								'style' => 'max-width:100px;height:auto;margin-right:20px;'
							]) ?>
						<?php endif; ?>
					</div>
				</div>
				<?php
					echo $this->Form->input('screen_monitor_images.file[]', [
						'type' => 'file',
						'label' => __('Screen Monitor Images'),
						'required' => false,
						'class' => 'image-preview-input',
						'data-preview' => 'screen-monitor-preview',
						'multiple' => true
					]);
				?>
				<div class="row">
					<div class="col-sm-12 col-md-8 col-lg-6" id="screen-monitor-preview">
						<?php if (count($project->screen_monitor_images)): ?>
							<?php foreach ($project->screen_monitor_images as $image): ?>
								<?= $this->Showcase->image($image, [
									'style' => 'max-width:100px;height:auto;margin-right:20px'
								]) ?>
							<?php endforeach; ?>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-12">
			<?= $this->Form->button(__('Submit'), ['class' => 'btn btn-success pull-right']) ?>
		</div>
	</div>
<?= $this->Form->end() ?>


<?php $this->append('script') ?>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/css/select2.min.css">
	<script src="//cdn.ckeditor.com/4.5.8/standard/ckeditor.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/js/select2.min.js"></script>

	<script>
		$(document).ready(function () {
			$('.taggable-select').select2({tags:true});
		});

		CKEDITOR.replace('description');
	</script>

	<script type="text/javascript">
		var inputs = document.getElementsByClassName('image-preview-input');

		for (var i = 0; i < inputs.length; i++) {
			inputs[i].onchange = function (e) {
				var files = e.target.files,
					preview = document.getElementById(e.target.dataset.preview),
					i = 0;

				if (!preview) {
					return;
				}

				preview.innerHTML = "";

				for (; i < files.length; i++) {
					var reader = new FileReader();
					console.log(files[i]);
					reader.readAsDataURL(files[i]);

					reader.onloadend = function () {
						var img = document.createElement('img');

						img.src = reader.result;
						img.style.maxWidth = "100px";
						img.style.height = "auto";

						img.onload = function () {
							preview.appendChild(img);
						}
					}
				}
			};
		}
	</script>
<?php $this->end('script') ?>
