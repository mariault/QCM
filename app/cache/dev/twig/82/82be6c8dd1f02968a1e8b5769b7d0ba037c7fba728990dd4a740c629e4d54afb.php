<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_19f8f84bcf04079532ab881736086f1dd95ce1dcfbb15e8f31dcd8b78e0cd0bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_524353e85dd242576f7bb19dd44f354f0356bdd30d88b899097e30f1a62a4420 = $this->env->getExtension("native_profiler");
        $__internal_524353e85dd242576f7bb19dd44f354f0356bdd30d88b899097e30f1a62a4420->enter($__internal_524353e85dd242576f7bb19dd44f354f0356bdd30d88b899097e30f1a62a4420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_524353e85dd242576f7bb19dd44f354f0356bdd30d88b899097e30f1a62a4420->leave($__internal_524353e85dd242576f7bb19dd44f354f0356bdd30d88b899097e30f1a62a4420_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_608cf5e0d903ee84d77694983b98c430214adf5c5face1d98c952e8db5567872 = $this->env->getExtension("native_profiler");
        $__internal_608cf5e0d903ee84d77694983b98c430214adf5c5face1d98c952e8db5567872->enter($__internal_608cf5e0d903ee84d77694983b98c430214adf5c5face1d98c952e8db5567872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_608cf5e0d903ee84d77694983b98c430214adf5c5face1d98c952e8db5567872->leave($__internal_608cf5e0d903ee84d77694983b98c430214adf5c5face1d98c952e8db5567872_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
