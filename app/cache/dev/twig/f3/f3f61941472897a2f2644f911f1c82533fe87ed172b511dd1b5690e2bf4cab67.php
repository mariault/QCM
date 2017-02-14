<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_85282e33a255d0f024241dff4470b5749a5db3c90dfa0409a18820f4082eaf4a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_389563e5a3db8de3ee0def53291d73ed93c74ffd520adc1ea6304da7b1e450f0 = $this->env->getExtension("native_profiler");
        $__internal_389563e5a3db8de3ee0def53291d73ed93c74ffd520adc1ea6304da7b1e450f0->enter($__internal_389563e5a3db8de3ee0def53291d73ed93c74ffd520adc1ea6304da7b1e450f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_389563e5a3db8de3ee0def53291d73ed93c74ffd520adc1ea6304da7b1e450f0->leave($__internal_389563e5a3db8de3ee0def53291d73ed93c74ffd520adc1ea6304da7b1e450f0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bcd48adf6e0af3241f251ac190e2e0ef54eacc76aaeff256483d834fb38f9dca = $this->env->getExtension("native_profiler");
        $__internal_bcd48adf6e0af3241f251ac190e2e0ef54eacc76aaeff256483d834fb38f9dca->enter($__internal_bcd48adf6e0af3241f251ac190e2e0ef54eacc76aaeff256483d834fb38f9dca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_bcd48adf6e0af3241f251ac190e2e0ef54eacc76aaeff256483d834fb38f9dca->leave($__internal_bcd48adf6e0af3241f251ac190e2e0ef54eacc76aaeff256483d834fb38f9dca_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "@FOSUser/layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "@FOSUser/Resetting/request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
