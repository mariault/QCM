<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_1526c04c681a8117e1bb788506c10e8f0f62f8dfd1d3aa05039769d8c2d353ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_5067790c9ef8f7c9a8bb5274a4f36bdd1bcd62dfe57fe746becccbbfe2f39cdc = $this->env->getExtension("native_profiler");
        $__internal_5067790c9ef8f7c9a8bb5274a4f36bdd1bcd62dfe57fe746becccbbfe2f39cdc->enter($__internal_5067790c9ef8f7c9a8bb5274a4f36bdd1bcd62dfe57fe746becccbbfe2f39cdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5067790c9ef8f7c9a8bb5274a4f36bdd1bcd62dfe57fe746becccbbfe2f39cdc->leave($__internal_5067790c9ef8f7c9a8bb5274a4f36bdd1bcd62dfe57fe746becccbbfe2f39cdc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_98f01392558e38b821c956a2fd6d1034ee79f4c0e3f99705294b0ea50457404a = $this->env->getExtension("native_profiler");
        $__internal_98f01392558e38b821c956a2fd6d1034ee79f4c0e3f99705294b0ea50457404a->enter($__internal_98f01392558e38b821c956a2fd6d1034ee79f4c0e3f99705294b0ea50457404a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_98f01392558e38b821c956a2fd6d1034ee79f4c0e3f99705294b0ea50457404a->leave($__internal_98f01392558e38b821c956a2fd6d1034ee79f4c0e3f99705294b0ea50457404a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
/* {% include "@FOSUser/Profile/edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
