<?php
    namespace PRODEB\DemComposer\Helper;
    
    use Slug\Slugifier;
    
    class GenerateSlug {
        public function generate($str) {
            $slugifier = new Slugifier();
            $slugifier->setTransliterate(true);
            return $slugifier->slugify($str);
        }
    }
    
?>