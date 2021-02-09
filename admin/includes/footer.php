<footer class="site-footer">
    <div class="text-center">
        <?php echo date('Y',time()) ?> &copy; IntellinQ
        <a href="#" class="go-top">
            <i class="fa fa-angle-up"></i>
        </a>
    </div>
</footer>
</section>
<script src="<?= isset($back_asset)?$back_asset:'' ?>js/jquery.js"></script>
<script src="<?= isset($back_asset)?$back_asset:'' ?>js/jquery-ui-1.9.2.custom.min.js"></script>
<script src="<?= isset($back_asset)?$back_asset:'' ?>js/bootstrap.bundle.min.js"></script>
<script src="<?= isset($back_asset)?$back_asset:'' ?>js/jquery.dcjqaccordion.2.7.js" class="include" type="text/javascript"></script>
<script src="<?= isset($back_asset)?$back_asset:'' ?>js/jquery.scrollTo.min.js"></script>
<script src="<?= isset($back_asset)?$back_asset:'' ?>js/jquery.nicescroll.js" type="text/javascript"></script>
<script src="<?= isset($back_asset)?$back_asset:'' ?>assets/advanced-datatable/media/js/jquery.dataTables.js" type="text/javascript"></script>
<script src="<?= isset($back_asset)?$back_asset:'' ?>assets/data-tables/DT_bootstrap.js" type="text/javascript"></script>
<script src="<?= isset($back_asset)?$back_asset:'' ?>js/respond.min.js" ></script>
<script src="<?= isset($back_asset)?$back_asset:'' ?>assets/fuelux/js/spinner.min.js" type="text/javascript" ></script>
<script src="<?= isset($back_asset)?$back_asset:'' ?>assets/bootstrap-fileupload/bootstrap-fileupload.js" type="text/javascript" ></script>
<script src="<?= isset($back_asset)?$back_asset:'' ?>assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js" type="text/javascript" ></script>
<script src="<?= isset($back_asset)?$back_asset:'' ?>assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js" type="text/javascript" ></script>
<script src="<?= isset($back_asset)?$back_asset:'' ?>assets/bootstrap-datepicker/js/bootstrap-datepicker.js" type="text/javascript" ></script>
<script src="<?= isset($back_asset)?$back_asset:'' ?>assets/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js" type="text/javascript" ></script>
<script src="<?= isset($back_asset)?$back_asset:'' ?>assets/bootstrap-daterangepicker/moment.min.js" type="text/javascript" ></script>
<script src="<?= isset($back_asset)?$back_asset:'' ?>assets/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript" ></script>
<script src="<?= isset($back_asset)?$back_asset:'' ?>assets/colorpicker/js/bootstrap-colorpicker.min.js" type="text/javascript" ></script>
<script src="<?= isset($back_asset)?$back_asset:'' ?>assets/bootstrap-timepicker/js/bootstrap-timepicker.js" type="text/javascript" ></script>
<script src="<?= isset($back_asset)?$back_asset:'' ?>assets/jquery-multi-select/js/jquery.multi-select.js" type="text/javascript" ></script>
<script src="<?= isset($back_asset)?$back_asset:'' ?>assets/jquery-multi-select/js/jquery.quicksearch.js" type="text/javascript" ></script>
<script src="<?= isset($back_asset)?$back_asset:'' ?>assets/select2/js/select2.min.js" type="text/javascript" ></script>
<script src="<?= isset($back_asset)?$back_asset:'' ?>assets/summernote/summernote-bs4.min.js"></script>
<script src="<?= isset($back_asset)?$back_asset:'' ?>js/slidebars.min.js"></script>
<script src="js/jquery.steps.min.js" type="text/javascript"></script>
<script src="js/jquery.validate.min.js" type="text/javascript"></script>
<script src="<?= isset($back_asset)?$back_asset:'' ?>js/advanced-form-components.js"></script>
<script src="<?= isset($back_asset)?$back_asset:'' ?>js/pickers/init-date-picker.js"></script>
<script src="<?= isset($back_asset)?$back_asset:'' ?>js/pickers/init-datetime-picker.js"></script>
<script src="<?= isset($back_asset)?$back_asset:'' ?>js/pickers/init-color-picker.js"></script>
<script src="<?= isset($back_asset)?$back_asset:'' ?>assets/bootstrap-switch/static/js/bootstrap-switch.js"></script>
<script src="<?= isset($back_asset)?$back_asset:'' ?>assets/switchery/switchery.js"></script>
<script src="<?= isset($back_asset)?$back_asset:'' ?>js/dynamic_table_init.js"></script>
<script src="<?= isset($back_asset)?$back_asset:'' ?>js/common-scripts.js"></script>
<script src="js/jquery.stepy.js"></script>
<script>

    //step wizard

    $(function() {
        $('#default').stepy({
            backLabel: 'Back',
            block: true,
            nextLabel: 'Image',
            titleClick: true,
            titleTarget: '.stepy-tab'
        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function () {
        var form = $("#wizard-validation-form");
        form.validate({
            errorPlacement: function errorPlacement(error, element) {
                element.after(error);
            }
        });
        form.children("div").steps({
            headerTag: "h3",
            bodyTag: "section",
            transitionEffect: "slideLeft",
            onStepChanging: function (event, currentIndex, newIndex) {
                form.validate().settings.ignore = ":disabled,:hidden";
                return form.valid();
            },
            onFinishing: function (event, currentIndex) {
                form.validate().settings.ignore = ":disabled";
                return form.valid();
            },
            onFinished: function (event, currentIndex) {
                alert("Submitted!");
            }
        }).validate({
            errorPlacement: function errorPlacement(error, element) {
                element.after(error);
            },
            rules: {
                confirm: {
                    equalTo: "#password"
                }
            }
        });
    });


</script>

</body>
</html>