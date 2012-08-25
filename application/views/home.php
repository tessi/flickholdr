<?php
$data=array('title'=>'Placeholder images from flickr - flickholdr.com');
$this->load->view('sub/head',$data)?>
<body>

	<div id="container">

		<div id="primary-content" role="main">
            <div id="left">
                <header id="header">
                    <h1><a href="/">flickhold<span class="lastr">r</span></a></h1>
                    <p title="A last, useful placeholders!" class="description">
                        Get <strong>placeholders</strong> related to the site you are developing, by pulling images from
                        <a href="http://flickr.com" title="visit flickr.com">flick<span class="lastr">r</span></a> based on tags
                    </p>

                </header>
                <h2 id="howto">Use It</h2>
                <p class="links">

                    Like this: <a href="<?php echo base_url()?>200/300"><?php echo base_url()?>200/300</a><br />
                    or with tags: <a href="<?php echo base_url()?>200/300/sea,sun"><?php echo base_url()?>200/300/sea,sun</a><br />
                    in B&W: <a href="<?php echo base_url()?>200/300/sea,sun/bw"><?php echo base_url()?>200/300/sea,sun/bw</a><br />
                    offsets: <a href="<?php echo base_url()?>200/300/sea,sun/1"><?php echo base_url()?>200/300/sea,sun/1</a><br />



                </p>

                <p>
                    <?php echo form_open('<?php echo base_url()?>image',array("id"=>"generate"))?>
                        <fieldset>
                        <legend>Create your own</legend>
                        <ul>

                            <li>
                                <label for="width" id="width_label">Width</label>
                                http://flickholdr.com/<input type="text" name="width" id="width" placeholder="220" />/
                            </li>
                            <li>
                                <label for="height">Height</label>
                                <input type="text" name="height" id="height" placeholder="170" />/
                            </li>
                            <li>
                                <label for="tags">Tags</label>
                                <input type="text" name="tags" id="tags" placeholder="sunrise" />
                            </li>

                        </ul>
                        <button type="submit" id="generate_button">Generate</button>
                        </fieldset>
                    </form>
                </p>
                <div id="generated_image">

                    <img id="image-0" src="<?php echo base_url()?>480/273/forest,tree,mountain/bw" width="470" height="273" alt="sunset,mountain">
                </div>
            </div>
			
<?php $this->load->view('sub/image_grid')?>

			
		</div><!-- /#primary-content -->

<?php $this->load->view('sub/footer')?>
