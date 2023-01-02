<div class="recent_event_area section__padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <div class="section_title text-center mb-70">
                        <h3 class="mb-45">Pengumuman</h3>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <?php foreach($data->result() as $row):?>
                    <div class="single_event d-flex align-items-center">
                        <div class="date text-center">
                            <span><?php echo date("d", strtotime($row->pengumuman_tanggal));?></span>
                            <p><?php echo date("M Y", strtotime($row->pengumuman_tanggal));?></p>
                        </div>
                        <div class="event_info">
                            <!-- <a href="event_details.html">
                                <h4><?php echo $row->pengumuman_judul;?></h4>
                             </a> -->
                             <p href="event_details.html">
                                <h4><?php echo $row->pengumuman_judul;?></h4>
                             </p>
                            <p><?php echo $row->pengumuman_deskripsi;?></p>
                            <p>Tanggal posting : <?php echo date("d", strtotime($row->pengumuman_tanggal));?>
                            <?php echo date("M Y", strtotime( $row->pengumuman_tanggal));?>
                            | <?php echo date("H:i", strtotime($row->pengumuman_tanggal)).' WIB';?></span> </p>
                        </div>
                    </div>
                    <?php endforeach;?>
                </div>
                <div class="col-md-12 text-center">
        <?php echo $page;?>
    </div>
            </div>
        </div>
    </div>