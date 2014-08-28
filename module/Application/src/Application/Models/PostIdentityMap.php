<?php
  
namespace Application\Models;

class PostIdentityMap 
{
    
    private $_dataMapper;
    
    public function __construct(PostDataMapper $pdm){
        $this->_dataMapper = $pdm;
    }
    
}