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
        $__internal_6c6a6048f989d9b824ca28b9d0451ac0b126d560d758d5a5afe27fce9469733f = $this->env->getExtension("native_profiler");
        $__internal_6c6a6048f989d9b824ca28b9d0451ac0b126d560d758d5a5afe27fce9469733f->enter($__internal_6c6a6048f989d9b824ca28b9d0451ac0b126d560d758d5a5afe27fce9469733f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_6c6a6048f989d9b824ca28b9d0451ac0b126d560d758d5a5afe27fce9469733f->leave($__internal_6c6a6048f989d9b824ca28b9d0451ac0b126d560d758d5a5afe27fce9469733f_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_298d8d3526054edbb9713ec01bb3fd5d1fcdcd6088228258d74060bda73e153f = $this->env->getExtension("native_profiler");
        $__internal_298d8d3526054edbb9713ec01bb3fd5d1fcdcd6088228258d74060bda73e153f->enter($__internal_298d8d3526054edbb9713ec01bb3fd5d1fcdcd6088228258d74060bda73e153f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_298d8d3526054edbb9713ec01bb3fd5d1fcdcd6088228258d74060bda73e153f->leave($__internal_298d8d3526054edbb9713ec01bb3fd5d1fcdcd6088228258d74060bda73e153f_prof);

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
