<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_96c3eed2190aa48640221abb71793be6c6d6ae7ad083dc80261595313b0b5645 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_1736d222176108314aaff6b4152787181ec2bbea5ae32b489f6551d796e9e4d2 = $this->env->getExtension("native_profiler");
        $__internal_1736d222176108314aaff6b4152787181ec2bbea5ae32b489f6551d796e9e4d2->enter($__internal_1736d222176108314aaff6b4152787181ec2bbea5ae32b489f6551d796e9e4d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1736d222176108314aaff6b4152787181ec2bbea5ae32b489f6551d796e9e4d2->leave($__internal_1736d222176108314aaff6b4152787181ec2bbea5ae32b489f6551d796e9e4d2_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c1b6a213b200a26a903acd147a1cbbb883d874184c362b1c7767d22e2ded681e = $this->env->getExtension("native_profiler");
        $__internal_c1b6a213b200a26a903acd147a1cbbb883d874184c362b1c7767d22e2ded681e->enter($__internal_c1b6a213b200a26a903acd147a1cbbb883d874184c362b1c7767d22e2ded681e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_c1b6a213b200a26a903acd147a1cbbb883d874184c362b1c7767d22e2ded681e->leave($__internal_c1b6a213b200a26a903acd147a1cbbb883d874184c362b1c7767d22e2ded681e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
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
