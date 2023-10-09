<?php 
  class Bird {
    public $commonName;
    public $habitat;
    public $food;
    public $nestPlacement;
    public $behavior;
    public $conservationId;
    public $backyardTips;


    public function __construct($args=[]) {
      $this->commonName = $args['commonName'] ?? '';
      $this->habitat = $args['habitat'] ?? '';
      $this->food = $args['food'] ?? '';
      $this->nestPlacement = $args['nestPlacement'] ?? '';
      $this->behavior = $args['behavior'] ?? '';
      $this->conservationId = $args['conservationId'] ?? '';
      $this->backyardTips = $args['backyardTips'] ?? '';
    }

  }


?>