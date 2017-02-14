<?php

/* @FOSUser/Resetting/check_email.html.twig */
class __TwigTemplate_bec12d2bd34faf498b9a5da5ac1a0a22eec9773b2f5642d82078547f3216dfa0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/check_email.html.twig", 1);
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
        $__internal_99115840d61d491b453a16873e6d9a8d490b538a8fb3e14eef9cd2a883283817 = $this->env->getExtension("native_profiler");
        $__internal_99115840d61d491b453a16873e6d9a8d490b538a8fb3e14eef9cd2a883283817->enter($__internal_99115840d61d491b453a16873e6d9a8d490b538a8fb3e14eef9cd2a883283817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_99115840d61d491b453a16873e6d9a8d490b538a8fb3e14eef9cd2a883283817->leave($__internal_99115840d61d491b453a16873e6d9a8d490b538a8fb3e14eef9cd2a883283817_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d73b67bf02a4ee940baee6354239a7bec0d47db81a1cb353e1ccbf105d72cbe2 = $this->env->getExtension("native_profiler");
        $__internal_d73b67bf02a4ee940baee6354239a7bec0d47db81a1cb353e1ccbf105d72cbe2->enter($__internal_d73b67bf02a4ee940baee6354239a7bec0d47db81a1cb353e1ccbf105d72cbe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_d73b67bf02a4ee940baee6354239a7bec0d47db81a1cb353e1ccbf105d72cbe2->leave($__internal_d73b67bf02a4ee940baee6354239a7bec0d47db81a1cb353e1ccbf105d72cbe2_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "@FOSUser/layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}*/
/* </p>*/
/* {% endblock %}*/
/* */
