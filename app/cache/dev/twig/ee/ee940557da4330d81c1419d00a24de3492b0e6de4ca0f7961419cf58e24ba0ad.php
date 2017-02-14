<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_afccb66f0d94a288e30913ecccd93367a343a8c973290f678987411dfbab6fae extends Twig_Template
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
        $__internal_21d2b0a2a7e871ee69a8ab72182c67f7fab36371e1dd18de5c2ea036618806d8 = $this->env->getExtension("native_profiler");
        $__internal_21d2b0a2a7e871ee69a8ab72182c67f7fab36371e1dd18de5c2ea036618806d8->enter($__internal_21d2b0a2a7e871ee69a8ab72182c67f7fab36371e1dd18de5c2ea036618806d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_21d2b0a2a7e871ee69a8ab72182c67f7fab36371e1dd18de5c2ea036618806d8->leave($__internal_21d2b0a2a7e871ee69a8ab72182c67f7fab36371e1dd18de5c2ea036618806d8_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_81d047d8cd79f41521e3aa1a8d852d1fd531a53190fd4e5631ca544b6dc15a8d = $this->env->getExtension("native_profiler");
        $__internal_81d047d8cd79f41521e3aa1a8d852d1fd531a53190fd4e5631ca544b6dc15a8d->enter($__internal_81d047d8cd79f41521e3aa1a8d852d1fd531a53190fd4e5631ca544b6dc15a8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_81d047d8cd79f41521e3aa1a8d852d1fd531a53190fd4e5631ca544b6dc15a8d->leave($__internal_81d047d8cd79f41521e3aa1a8d852d1fd531a53190fd4e5631ca544b6dc15a8d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
