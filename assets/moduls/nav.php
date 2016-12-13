<nav class="navbar top black padding">
	<li><a href="javascript:;" class="hover-none hover-text-white"><b>SISTEM LAPORAN PAJAK</b></a></li>
	<li><a href="javascript:;" class="round"><i class="fa fa-home"></i> &nbsp;<b>Home</b></a></li>
	<li><a href="javascript:;" class="round"><i class="fa fa-file"></i> &nbsp;<b>Create Report</b></a></li>
	<li><a href="javascript:;" class="round"><i class="fa fa-list"></i> &nbsp;<b>List Report</b></a></li>
	<?php if(!isset($_SESSION['username'])){echo "";}else{ ?>
	<li class="right"><a href="<?= $hosted ?>logout/exit" class="hover-none hover-text-white"><i class="fa fa-universal-access"></i> &nbsp;<b><?= strtoupper($_SESSION['username']) ?></b></a></li>
	<?php } ?>
</nav>