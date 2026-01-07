<?php
/*
 *
 * This is the branch page.
 *
 */

require_once __ROOT__ . '/types/branches/branches.php';
use \BFS\Types\Branches;

$branchesInRegion = Branches::getByRegion( REGION );



// $postTitle = 'Find a White Gold Branch Near You';

require_once __ROOT__ . '/pages/partials/header.php';

?>





<?php /* Store data in JavaScript */ ?>
<script type="text/javascript">

	window.__BFS = window.__BFS || { };
	window.__BFS.settings = window.__BFS.settings || { };
	window.__BFS.settings.region = "<?= REGION ?>";
	window.__BFS.data = window.__BFS.data || { };
	window.__BFS.data.branchesInRegion = <?= json_encode( array_map( function ( $branch ) {
		return array_merge( $branch->get( 'acf' ), $branch->get( '__custom' ) );
	}, $branchesInRegion ) ) ?>;

</script>
<?php /* END: Store data in JavaScript */ ?>

<!-- ## Branches Page -->
<!-- Header Section -->
<?php require_once __ROOT__ . '/pages/section/header.php'; ?>
<!-- END: Header Section -->



<?php
// Sort branches alphabetically by branch name before looping
usort($branchesInRegion, function($a, $b) {
    return strcmp(strtolower($a->get('branch_name')), strtolower($b->get('branch_name')));
});
?>

<!-- Find Branch Section -->
<section class="find-branch-section space-200-top">
	<div class="container">
		<div class="row">
			<div class="intro columns small-6 medium-4 large-3 space-100-bottom">
				<div class="title h2 strong text-blue-4">Find a <span class="no-wrap">White Gold</span> branch <br><span class="text-neutral-3">near you</span></div>
				<div class="char"><img class="block" src="/media/cutout/char-7094.png<?php echo $ver ?>"></div>
			</div>
			<div class="branch-listing columns small-12 medium-7 medium-offset-1 large-6 large-offset-3">
				<input id="more-branches" type="checkbox" name="more-branches" class="more-branches visuallyhidden js_more_branches">
				<div class="branches space-50-bottom">
					<div class="branch-grid js_branches_container">
						<?php foreach ( $branchesInRegion as $branch ) : ?>
							<!-- Branch -->
							<div class="branch fill-light js_branch space-150-top-bottom space-25-left-right">
								
								<div onclick="window.location='<?= $branch->get( 'add_page_link' ) ?>';" class="thumbnail fill-neutral-1 radius-25 img-branch" <?php if ( $branch->get( 'branchImage' ) ) : ?>style="background-image: url( '<?= $branch->get( 'branchImage' ) ?>' );cursor:pointer;"<?php endif; ?>></div>
								<a href="<?= $branch->get( 'add_page_link' ) ?>"><div class="title h6 strong"><?= $branch->get( 'branch_name' ) ?></div></a>
								<a class="explore-link" href="<?= $branch->get( 'add_page_link' ) ?>"><div class="explore">Explore Now</div></a>
								<div class="timings p text-neutral-3 space-25-bottom">Open Mon to Sat</div>
								<div class="distance h4 text-neutral-3 js_distance_from_user hidden"></div>
								<div class="check-distance small medium text-uppercase text-blue-1 space-25 fill-blue-5 js_check_distance hidden">
									<span class="material-icons inline-middle" data-icon="my_location"></span>
									<span class="inline-middle">&nbsp;Check Distance</span>
								</div>
								<a class="gmaps-link button fill-blue-1" href="<?= $branch->get( 'google_maps' ) ?>" target="_blank">
									<span class="button-label">Open in Maps&nbsp;</span>
									<img class="button-icon tall" src="/media/icon/gmaps-tall-color.svg<?php echo $ver ?>">
								</a>
							</div>
							<!-- END: Branch -->
						<?php endforeach; ?>
					</div>
				</div>
				<div class="hide-branches columns text-center space-50-top space-200-bottom fill-light small-12">
					<button class="button fill-blue-1 more-branches js_show_more_branches">All Branches</button>&emsp;
					<button class="button fill-blue-5 order-by-nearest js_order_branches">Show Nearest Branch</button>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- END: Find Branch Section -->




<script type="text/javascript" src="/plugins/geolib/geolib-v3.3.1.min.js"></script>
<script type="text/javascript" src="/js/pages/branch-finder.js<?= $ver ?>"></script>

</script>

<style>
.explore::after {
    position: relative;
    content: url(https://whitegold.money/cms/../content/cms/explore.svg);
	left: 5px;
    top: 1px;
}
.explore::after:hover{
	text-decoration:underline;
}
.explore-link:hover{
	text-decoration:underline;
}
.explore{
font-weight: 500;	
color:#11309A;
font-size:14px;
}
.explore-link {
	min-height: calc( var(--h6) * 2 );
display: block;
}
.find-branch-section .branch-listing .branch-grid .branch .title {
   
    min-height:0px;
}
.find-branch-section .branch-listing .branch-grid {
    grid-gap: var(--space-100)!important;
    
}
	.find-branch-section .branch-listing .branch-grid .branch {
		margin-bottom: -8%;
}
</style>
<?php require_once __ROOT__ . '/pages/partials/footer.php'; ?>

