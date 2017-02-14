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
        $__internal_950aa32cdb73dcf44af619ef353fc1af707f049ef409c0e695e4e249f9a3ede4 = $this->env->getExtension("native_profiler");
        $__internal_950aa32cdb73dcf44af619ef353fc1af707f049ef409c0e695e4e249f9a3ede4->enter($__internal_950aa32cdb73dcf44af619ef353fc1af707f049ef409c0e695e4e249f9a3ede4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_950aa32cdb73dcf44af619ef353fc1af707f049ef409c0e695e4e249f9a3ede4->leave($__internal_950aa32cdb73dcf44af619ef353fc1af707f049ef409c0e695e4e249f9a3ede4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_82b5b5b0982b8661cc77a46c3723061818791dc9259ebf8f6b1831199ccf1171 = $this->env->getExtension("native_profiler");
        $__internal_82b5b5b0982b8661cc77a46c3723061818791dc9259ebf8f6b1831199ccf1171->enter($__internal_82b5b5b0982b8661cc77a46c3723061818791dc9259ebf8f6b1831199ccf1171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_82b5b5b0982b8661cc77a46c3723061818791dc9259ebf8f6b1831199ccf1171->leave($__internal_82b5b5b0982b8661cc77a46c3723061818791dc9259ebf8f6b1831199ccf1171_prof);

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
