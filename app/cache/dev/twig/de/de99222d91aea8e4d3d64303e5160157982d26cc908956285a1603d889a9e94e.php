<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_208f372052a5c63ba36c24ab530ee590005d3cbbff7701cf7d4cc1b782dda165 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_ff395d18b5c9a6bfcf2c3fa75d5976dc2bef1d4654bc93d80d550202a2992654 = $this->env->getExtension("native_profiler");
        $__internal_ff395d18b5c9a6bfcf2c3fa75d5976dc2bef1d4654bc93d80d550202a2992654->enter($__internal_ff395d18b5c9a6bfcf2c3fa75d5976dc2bef1d4654bc93d80d550202a2992654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff395d18b5c9a6bfcf2c3fa75d5976dc2bef1d4654bc93d80d550202a2992654->leave($__internal_ff395d18b5c9a6bfcf2c3fa75d5976dc2bef1d4654bc93d80d550202a2992654_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e39a688e30a09439255327f76b1a0e9479013c12ffd162ef785f67ca678bd7bb = $this->env->getExtension("native_profiler");
        $__internal_e39a688e30a09439255327f76b1a0e9479013c12ffd162ef785f67ca678bd7bb->enter($__internal_e39a688e30a09439255327f76b1a0e9479013c12ffd162ef785f67ca678bd7bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_e39a688e30a09439255327f76b1a0e9479013c12ffd162ef785f67ca678bd7bb->leave($__internal_e39a688e30a09439255327f76b1a0e9479013c12ffd162ef785f67ca678bd7bb_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
/*     {{ include('@FOSUser/Security/login_content.html.twig') }}*/
/* {% endblock fos_user_content %}*/
/* */
