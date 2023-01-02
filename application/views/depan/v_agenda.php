<div class="recent_event_area section__padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <div class="section_title text-center mb-70">
                        <h3 class="mb-45">Agenda</h3>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <?php foreach($data->result() as $row):?>
                    <div class="single_event d-flex align-items-center">
                        <div class="date text-center">
                            <!-- <span><?php echo date("d", strtotime($row->agenda_tanggal));?></span>
                            <p><?php echo date("M Y", strtotime($row->agenda_tanggal));?></p> -->
                            <span><?php echo date("d", strtotime($row->agenda_mulai));?></span>
                            <p><?php echo date("M Y", strtotime($row->agenda_mulai));?></p>
                        </div>
                        <div class="event_info">
                            <!-- <a href="event_details.html">
                                <h4><?php echo $row->agenda_nama;?></h4>
                             </a> -->
                             <p href="event_details.html">
                                <h4><?php echo $row->agenda_nama;?></h4>
                             </p>
                            <p><?php echo $row->agenda_deskripsi;?></p>
                            <p>Tempat : <span> <i class="fas fa-location"></i> <?php echo $row->agenda_tempat;?></span> </p>
                            <p>Jam :<span> <i class="flaticon-lock"></i> <?php echo $row->agenda_waktu;?></span> </p>
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