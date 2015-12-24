<div class="row">
	<div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
		<div class="box box-solid box-primary">
			<div class="box-header">
				<h3 class="box-title"><?php echo __('Dominions'); ?></h3>
				<div class="box-tools pull-right">
                    <button class="btn btn-primary btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-primary btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
				</div>
			</div>
			<div class="box-body">
				<div class="row">
                                    
					<div class="col-lg-6 col-xs-12 col-md-6 col-sm-12">
                        <!-- small box -->
                        <div class="small-box bg-aqua">
                            <div class="inner">
                                <h3>
                                    Linguistics
                                </h3>
                                <p>
                                    Data Survey
                                </p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-fw fa-th-large"></i>
                            </div>
                            <a href="<?php echo $this->Html->url(array('controller'=>'linguistics','action'=>'personnellist')) ?>" class="small-box-footer">
                                More info <i class="fa fa-arrow-circle-right"></i>
                            </a>
                        </div>
					</div>
					<div class="col-lg-6 col-xs-12 col-md-6 col-sm-12">
                        <!-- small box -->
                        <div class="small-box bg-green">
                            <div class="inner">
                                <h3>
                                    Cultural
                                </h3>
                                <p>
                                    Data Survey
                                </p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-fw fa-th-large"></i>
                            </div>
                            <a href="<?php echo $this->Html->url(array('controller'=>'pages','action'=>'cultural_dashboard')) ?>" class="small-box-footer">
                                More info <i class="fa fa-arrow-circle-right"></i>
                            </a>
                        </div>
					</div>
						
					
				</div>
			</div>
		</div>
	</div>
</div>