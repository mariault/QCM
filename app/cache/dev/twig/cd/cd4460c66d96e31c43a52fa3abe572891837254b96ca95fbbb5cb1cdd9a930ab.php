<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_3dae446095c287aa615f89ce38fd8607750d9155f4bd66f6150694f28bca168f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_743c00d8056e9fa3dd4766d8aadf27ae1820b49bcb81d4e26f9dffbe1eefed96 = $this->env->getExtension("native_profiler");
        $__internal_743c00d8056e9fa3dd4766d8aadf27ae1820b49bcb81d4e26f9dffbe1eefed96->enter($__internal_743c00d8056e9fa3dd4766d8aadf27ae1820b49bcb81d4e26f9dffbe1eefed96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_743c00d8056e9fa3dd4766d8aadf27ae1820b49bcb81d4e26f9dffbe1eefed96->leave($__internal_743c00d8056e9fa3dd4766d8aadf27ae1820b49bcb81d4e26f9dffbe1eefed96_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_03383f7bc4f2f9fa659f47217f5b51b183b96d8e9c20c24598327be0fa3052fc = $this->env->getExtension("native_profiler");
        $__internal_03383f7bc4f2f9fa659f47217f5b51b183b96d8e9c20c24598327be0fa3052fc->enter($__internal_03383f7bc4f2f9fa659f47217f5b51b183b96d8e9c20c24598327be0fa3052fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_03383f7bc4f2f9fa659f47217f5b51b183b96d8e9c20c24598327be0fa3052fc->leave($__internal_03383f7bc4f2f9fa659f47217f5b51b183b96d8e9c20c24598327be0fa3052fc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
/* {% include "@FOSUser/ChangePassword/change_password_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
