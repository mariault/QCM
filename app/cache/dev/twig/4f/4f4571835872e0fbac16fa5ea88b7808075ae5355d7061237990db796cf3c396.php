<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_ccac6b9b1e39fd2122d3148f18705430bfdc708a04c4adc1c9cb36a196e76584 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_b4c09a129212d7c30e4c04fbdfb8e10cc0d97b29a35301cc783dc0d28283d2b4 = $this->env->getExtension("native_profiler");
        $__internal_b4c09a129212d7c30e4c04fbdfb8e10cc0d97b29a35301cc783dc0d28283d2b4->enter($__internal_b4c09a129212d7c30e4c04fbdfb8e10cc0d97b29a35301cc783dc0d28283d2b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b4c09a129212d7c30e4c04fbdfb8e10cc0d97b29a35301cc783dc0d28283d2b4->leave($__internal_b4c09a129212d7c30e4c04fbdfb8e10cc0d97b29a35301cc783dc0d28283d2b4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_063e96c7be91021617eec6d9206285fa89e7c526436c8205c09b5404d5c5d775 = $this->env->getExtension("native_profiler");
        $__internal_063e96c7be91021617eec6d9206285fa89e7c526436c8205c09b5404d5c5d775->enter($__internal_063e96c7be91021617eec6d9206285fa89e7c526436c8205c09b5404d5c5d775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_063e96c7be91021617eec6d9206285fa89e7c526436c8205c09b5404d5c5d775->leave($__internal_063e96c7be91021617eec6d9206285fa89e7c526436c8205c09b5404d5c5d775_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
/* {% include "@FOSUser/Registration/register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
