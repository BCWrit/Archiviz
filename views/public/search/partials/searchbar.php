<!-- <div class="w3-container w3-cell w3-cell-middle">
  <div class="w3-row">
    <input class="w3-col w3-border-0 l10 w3-input" type="text" placeholder="Search">
    <button class="w3-col l2 w3-button"><i class="fa fa-search"></i></button>
  </div>
</div>

<div class="w3-container w3-cell w3-cell-middle">
  <h3>Start Date</h3>
  <input type="date" name="bday">
</div>

<div class="w3-container w3-cell w3-cell-middle">
  <h3>End Date</h3>
  <input type="date" name="bday">
</div> 

<customdiv id="elasticsearch-search">
    <form id="elasticsearch-search-form">
    
        <input type="text"
               placeholder="Search" 
               title="<?php echo __('Search keywords') ?>"
               name="q"
               style="width: 60%;"
               value="<?php echo htmlspecialchars(array_key_exists('q', $_GET) ? $_GET['q'] : '', ENT_QUOTES); ?>" />
               
        <input type="submit" value="Search" style="width:30%"/>
    
        <button type="button" style="width: 10%" onclick="modalOpen()"><i class="fa fa-gear"></i></button>
        
        <a href="javascript:void(0);" id="elasticsearch-help-btn" style="display:block;clear:both; 
                                                                         color:white;
                                                                         font-weight:bold;
                                                                         padding:10px; 
                                                                         padding-left: 20px;">
        </a>
        
    </form>
</customdiv>
-->