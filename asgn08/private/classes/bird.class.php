<?php 
  class Bird {
    public $commonName;
    public $habitat;
    public $food;
    public $nestPlacement;
    public $behavior;
    public $backyardTips;
    
    protected $conservationId = 1;

    protected const CONSERVATION_OPTIONS = [
      1 => 'Low concern',
      2 => 'Moderate concern',
      3 => 'Extreme concern',
      4 => 'Extinct'
    ];

    public function __construct($args=[]) {
      $this->commonName = $args['commonName'] ?? '';
      $this->habitat = $args['habitat'] ?? '';
      $this->food = $args['food'] ?? '';
      $this->nestPlacement = $args['nestPlacement'] ?? '';
      $this->behavior = $args['behavior'] ?? '';
      $this->conservationId = $args['conservationId'] ?? '';
      $this->backyardTips = $args['backyardTips'] ?? '';
    }

    public function conservation() {
      if($this->conservationId > 0) {
        return self::CONSERVATION_OPTIONS[$this->conservationId];
      } else {
        return "Unknown";
      }
    }
  }


?>