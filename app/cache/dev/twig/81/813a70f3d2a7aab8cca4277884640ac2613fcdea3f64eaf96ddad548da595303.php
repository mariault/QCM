<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_efda4d542ea398d17f245674a9d89a031d931ce03f36f15e21345ae2d22c8692 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_6f43347acd7ae843979687652d9042bfcca6ed59ba48cd79f8d3695e439d0a7c = $this->env->getExtension("native_profiler");
        $__internal_6f43347acd7ae843979687652d9042bfcca6ed59ba48cd79f8d3695e439d0a7c->enter($__internal_6f43347acd7ae843979687652d9042bfcca6ed59ba48cd79f8d3695e439d0a7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f43347acd7ae843979687652d9042bfcca6ed59ba48cd79f8d3695e439d0a7c->leave($__internal_6f43347acd7ae843979687652d9042bfcca6ed59ba48cd79f8d3695e439d0a7c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_334a18dac557c0c8124b0a113055f90e31e80d43a45cb34a8d901019f4f88f09 = $this->env->getExtension("native_profiler");
        $__internal_334a18dac557c0c8124b0a113055f90e31e80d43a45cb34a8d901019f4f88f09->enter($__internal_334a18dac557c0c8124b0a113055f90e31e80d43a45cb34a8d901019f4f88f09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_334a18dac557c0c8124b0a113055f90e31e80d43a45cb34a8d901019f4f88f09->leave($__internal_334a18dac557c0c8124b0a113055f90e31e80d43a45cb34a8d901019f4f88f09_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
