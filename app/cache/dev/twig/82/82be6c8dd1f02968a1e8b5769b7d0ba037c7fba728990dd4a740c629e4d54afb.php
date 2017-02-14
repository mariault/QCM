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
        $__internal_d96bf704b7e798d033bd1c082d7609a75e729844ba67151b30bfed554e3e3cc1 = $this->env->getExtension("native_profiler");
        $__internal_d96bf704b7e798d033bd1c082d7609a75e729844ba67151b30bfed554e3e3cc1->enter($__internal_d96bf704b7e798d033bd1c082d7609a75e729844ba67151b30bfed554e3e3cc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_d96bf704b7e798d033bd1c082d7609a75e729844ba67151b30bfed554e3e3cc1->leave($__internal_d96bf704b7e798d033bd1c082d7609a75e729844ba67151b30bfed554e3e3cc1_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_42309fec22f586733d7b5234da38992596aa3779714320e31e860937e437b5df = $this->env->getExtension("native_profiler");
        $__internal_42309fec22f586733d7b5234da38992596aa3779714320e31e860937e437b5df->enter($__internal_42309fec22f586733d7b5234da38992596aa3779714320e31e860937e437b5df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_42309fec22f586733d7b5234da38992596aa3779714320e31e860937e437b5df->leave($__internal_42309fec22f586733d7b5234da38992596aa3779714320e31e860937e437b5df_prof);

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
