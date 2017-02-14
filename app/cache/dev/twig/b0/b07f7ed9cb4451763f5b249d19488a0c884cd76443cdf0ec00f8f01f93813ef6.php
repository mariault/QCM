<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_40cca949dc52c58023a247b06539c46564efa4a5b302325e3a6807a10268b6b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_68a2b3d7e82458b7104dfac2b59654d6932012964704a359102931384e5a41e4 = $this->env->getExtension("native_profiler");
        $__internal_68a2b3d7e82458b7104dfac2b59654d6932012964704a359102931384e5a41e4->enter($__internal_68a2b3d7e82458b7104dfac2b59654d6932012964704a359102931384e5a41e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_68a2b3d7e82458b7104dfac2b59654d6932012964704a359102931384e5a41e4->leave($__internal_68a2b3d7e82458b7104dfac2b59654d6932012964704a359102931384e5a41e4_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_d6bf769d824854bf730e50ae03310e5f990e05d088142d20781fde8dc168bdf0 = $this->env->getExtension("native_profiler");
        $__internal_d6bf769d824854bf730e50ae03310e5f990e05d088142d20781fde8dc168bdf0->enter($__internal_d6bf769d824854bf730e50ae03310e5f990e05d088142d20781fde8dc168bdf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_d6bf769d824854bf730e50ae03310e5f990e05d088142d20781fde8dc168bdf0->leave($__internal_d6bf769d824854bf730e50ae03310e5f990e05d088142d20781fde8dc168bdf0_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_e226a35be9dc48e2f57122bd55246878b14710003bfb79fe450a10c44d15e88c = $this->env->getExtension("native_profiler");
        $__internal_e226a35be9dc48e2f57122bd55246878b14710003bfb79fe450a10c44d15e88c->enter($__internal_e226a35be9dc48e2f57122bd55246878b14710003bfb79fe450a10c44d15e88c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_e226a35be9dc48e2f57122bd55246878b14710003bfb79fe450a10c44d15e88c->leave($__internal_e226a35be9dc48e2f57122bd55246878b14710003bfb79fe450a10c44d15e88c_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_b949111c31167265a1148c7098118cbc833c744b0757e132b6a9a61349193d37 = $this->env->getExtension("native_profiler");
        $__internal_b949111c31167265a1148c7098118cbc833c744b0757e132b6a9a61349193d37->enter($__internal_b949111c31167265a1148c7098118cbc833c744b0757e132b6a9a61349193d37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_b949111c31167265a1148c7098118cbc833c744b0757e132b6a9a61349193d37->leave($__internal_b949111c31167265a1148c7098118cbc833c744b0757e132b6a9a61349193d37_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  67 => 13,  58 => 10,  52 => 8,  45 => 4,  39 => 2,  32 => 13,  30 => 8,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {%- autoescape false -%}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {%- endautoescape -%}*/
/* {% endblock %}*/
/* */
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
