<section class="w sell-gold-form-section space-100-top space-200-bottom js_sell_gold_form_section" id="sell-gold-form-section" data-section-title="Sell Gold Form Section" data-section-slug="sell-gold-form-section">
	<div class="container">
		<div class="row sell-gold-form">
			<div class="columns small-6 medium-5 large-4 space-100-bottom">
				<div class="logo space-75-bottom">
					<img class="block" src="/media/whitegold-logo-dark.svg<?php echo $ver ?>">
				</div>
				<div class="h2 line-height-small">Looking for Gold Buyers in <span class="strong line-h-1"><?php the_field('add_locationn');?></span></div>
			</div>
			<br class="hide-large hide-xlarge">
			<div class="columns small-9 medium-5 large-3 large-offset-1">
				<div class="form-card row fill-light">		
				<form class="form form-base js_sell_gold_form_new" action="/cms/wp-content/themes/braun/sell-gold-lead-handler.php" method="post">
						<div class="columns small-12">
							<label class=" block">
								<input type="text" name="name" placeholder="Full Name" class="form-input-field block" required>
								<!-- <span class="form-label-title medium fill-light cursor-pointer">Full Name</span> -->
							</label>
						</div>


						<div class="columns small-12 space-50-top">
							<label class=" block">
								<input type="number" name="gross_weight" placeholder="Quantity (in grams)" class="form-input-field block" required>
								<!-- <span class="form-label-title medium fill-light cursor-pointer">Quantity (in grams)</span> -->
							</label>
						</div>


						<div class="columns small-12 space-50-top">
							<label class=" form-label block">
								<input type="text" name="mobile" required class="form-input-field w-100">
								<!-- <span class="country-code-divider material-icons" data-icon="unfold_more"></span> -->
								<span class="form-label-title medium fill-light cursor-pointer">Mobile Number</span>
							</label>
						</div>
						<div class="row space-25-top space-50-left-right">
							<div class="small text-neutral-3">I hereby authorise, WHITE GOLD to call me on this number.</div>
						</div>
						<div class="columns small-12 space-50-top">
							<label class="form-label block">
								<span class="form-label-title hidden medium fill-light cursor-pointer">Submit</span>
								<button class="button fill-blue-1" type="submit">
									<span class="button-label">Sell Gold</span>
									<img class="button-icon tall" src="/media/icon/rupee-tall-blue.svg<?php echo $ver ?>">
								</button>
							</label>
						</div>
						<div class="columns small-12 space-50-top">
							<a class="inline phone-call" href="tel:<?= $contactNumbersForRegions[ REGION ] ?>">
								<img class="icon inline-middle" style="width: calc( var(--h6) * 2 );" src="/media/icon/phone-call-dark.svg<?php echo $ver ?>">
								<div class="inline-middle space-25-left">
									<span class="inline label strong text-uppercase line-height-small">Or call</span><br>
									<span class="inline h6 strong line-height-small"><?= $contactNumbersForRegions[ REGION ] ?></span>
								</div>
							</a>
						</div>
					</form>	
		</div>
			</div>
		</div>
		
<div class="char"><img class="block" src="<?php the_field('add_form_bg_image');?>" alt="Looking to sell gold in <?php the_field('add_locationn');?>"></div>

	</div>
</section>


<style>
    .w.sell-gold-form-section .form-input-field {
    color: #000;
}

.w.sell-gold-form-section .form-input-field::placeholder {
    color: #999;
    opacity: 1;
}

.w.sell-gold-form-section .w-100{
    width: 100%;
}
</style>


