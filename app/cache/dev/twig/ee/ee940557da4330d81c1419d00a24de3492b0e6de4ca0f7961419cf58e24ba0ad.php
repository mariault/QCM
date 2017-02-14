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
        $__internal_563dc9d5d112687c8626df0040e5199a78549cbdaa2d7a9e5ea6d1cb4a77255e = $this->env->getExtension("native_profiler");
        $__internal_563dc9d5d112687c8626df0040e5199a78549cbdaa2d7a9e5ea6d1cb4a77255e->enter($__internal_563dc9d5d112687c8626df0040e5199a78549cbdaa2d7a9e5ea6d1cb4a77255e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_563dc9d5d112687c8626df0040e5199a78549cbdaa2d7a9e5ea6d1cb4a77255e->leave($__internal_563dc9d5d112687c8626df0040e5199a78549cbdaa2d7a9e5ea6d1cb4a77255e_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_8d58031ca5f2dcca700110c9ed7543aa9d755c4c542954a7199835b7c6d08b07 = $this->env->getExtension("native_profiler");
        $__internal_8d58031ca5f2dcca700110c9ed7543aa9d755c4c542954a7199835b7c6d08b07->enter($__internal_8d58031ca5f2dcca700110c9ed7543aa9d755c4c542954a7199835b7c6d08b07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_8d58031ca5f2dcca700110c9ed7543aa9d755c4c542954a7199835b7c6d08b07->leave($__internal_8d58031ca5f2dcca700110c9ed7543aa9d755c4c542954a7199835b7c6d08b07_prof);

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
