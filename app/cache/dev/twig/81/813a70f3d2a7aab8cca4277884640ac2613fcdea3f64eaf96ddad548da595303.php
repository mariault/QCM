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
        $__internal_b6d2040cd8e8efdf7b554af9282888434f5699768e2f2aeb7f90af8727093032 = $this->env->getExtension("native_profiler");
        $__internal_b6d2040cd8e8efdf7b554af9282888434f5699768e2f2aeb7f90af8727093032->enter($__internal_b6d2040cd8e8efdf7b554af9282888434f5699768e2f2aeb7f90af8727093032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6d2040cd8e8efdf7b554af9282888434f5699768e2f2aeb7f90af8727093032->leave($__internal_b6d2040cd8e8efdf7b554af9282888434f5699768e2f2aeb7f90af8727093032_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_585ad256eefa6817e4ed34f664fda291e0ecbba5ee05eafd8ce0c51e22a783be = $this->env->getExtension("native_profiler");
        $__internal_585ad256eefa6817e4ed34f664fda291e0ecbba5ee05eafd8ce0c51e22a783be->enter($__internal_585ad256eefa6817e4ed34f664fda291e0ecbba5ee05eafd8ce0c51e22a783be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_585ad256eefa6817e4ed34f664fda291e0ecbba5ee05eafd8ce0c51e22a783be->leave($__internal_585ad256eefa6817e4ed34f664fda291e0ecbba5ee05eafd8ce0c51e22a783be_prof);

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
