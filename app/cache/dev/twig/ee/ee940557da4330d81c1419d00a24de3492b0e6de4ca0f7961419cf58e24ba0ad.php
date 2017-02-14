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
        $__internal_e75383c0efc2018ae0e203bef516b81b7efe2d03c10eecbd9cf9eac3ee9ffdb8 = $this->env->getExtension("native_profiler");
        $__internal_e75383c0efc2018ae0e203bef516b81b7efe2d03c10eecbd9cf9eac3ee9ffdb8->enter($__internal_e75383c0efc2018ae0e203bef516b81b7efe2d03c10eecbd9cf9eac3ee9ffdb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_e75383c0efc2018ae0e203bef516b81b7efe2d03c10eecbd9cf9eac3ee9ffdb8->leave($__internal_e75383c0efc2018ae0e203bef516b81b7efe2d03c10eecbd9cf9eac3ee9ffdb8_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_119980302d1e51ab0a5895a9403f6fcdc3e517afee52b850de3c83ab07c5a310 = $this->env->getExtension("native_profiler");
        $__internal_119980302d1e51ab0a5895a9403f6fcdc3e517afee52b850de3c83ab07c5a310->enter($__internal_119980302d1e51ab0a5895a9403f6fcdc3e517afee52b850de3c83ab07c5a310_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_119980302d1e51ab0a5895a9403f6fcdc3e517afee52b850de3c83ab07c5a310->leave($__internal_119980302d1e51ab0a5895a9403f6fcdc3e517afee52b850de3c83ab07c5a310_prof);

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
