<?php

/* QCMBackBundle:Default:list.html.twig */
class __TwigTemplate_f1f4f3628837f25fa974e3fa1632860c5c5fea2bf3e945e2db9b7fbbfb2c4c51 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("QCMBackBundle:Default:index.html.twig", "QCMBackBundle:Default:list.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "QCMBackBundle:Default:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_16a090b945ecc823d61b7e81ed82c750599c51eb05a1d137fb5d6a1ad1b77429 = $this->env->getExtension("native_profiler");
        $__internal_16a090b945ecc823d61b7e81ed82c750599c51eb05a1d137fb5d6a1ad1b77429->enter($__internal_16a090b945ecc823d61b7e81ed82c750599c51eb05a1d137fb5d6a1ad1b77429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "QCMBackBundle:Default:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16a090b945ecc823d61b7e81ed82c750599c51eb05a1d137fb5d6a1ad1b77429->leave($__internal_16a090b945ecc823d61b7e81ed82c750599c51eb05a1d137fb5d6a1ad1b77429_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7d1c676f00fbf86ef5ec0cf778010b889cf77a93b98dde22b457031752f3a8fa = $this->env->getExtension("native_profiler");
        $__internal_7d1c676f00fbf86ef5ec0cf778010b889cf77a93b98dde22b457031752f3a8fa->enter($__internal_7d1c676f00fbf86ef5ec0cf778010b889cf77a93b98dde22b457031752f3a8fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1 style=\"color: orange\">Liste des QCM</h1>
    
        
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) ? $context["list"] : $this->getContext($context, "list")));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            echo "  
        <div class=\"warning\">
         <a style=\"color: orange\"><strong>Titre du Test : </strong>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "getlibelle", array(), "method"), "html", null, true);
            echo "</a><br><a style=\"color:green\"><strong>Description du Test : </strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "getdescription", array(), "method"), "html", null, true);
            echo "</a><br>
        <a style=\"color: red\"><strong>La durée du test est de :</strong> ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "getduree", array(), "method"), "html", null, true);
            echo "<strong>   secondes</strong></a ><br>
        <a style=\"color: greenyellow\"><strong>Le seuil de bonne réponse est de : </strong>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "getseuil", array(), "method"), "html", null, true);
            echo "</a><br> 
        </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "        </div>
    </td>
</div>

";
        
        $__internal_7d1c676f00fbf86ef5ec0cf778010b889cf77a93b98dde22b457031752f3a8fa->leave($__internal_7d1c676f00fbf86ef5ec0cf778010b889cf77a93b98dde22b457031752f3a8fa_prof);

    }

    public function getTemplateName()
    {
        return "QCMBackBundle:Default:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 14,  62 => 11,  58 => 10,  52 => 9,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'QCMBackBundle:Default:index.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1 style="color: orange">Liste des QCM</h1>*/
/*     */
/*         */
/*     {% for post in list %}  */
/*         <div class="warning">*/
/*          <a style="color: orange"><strong>Titre du Test : </strong>{{ post.getlibelle()}}</a><br><a style="color:green"><strong>Description du Test : </strong> {{ post.getdescription() }}</a><br>*/
/*         <a style="color: red"><strong>La durée du test est de :</strong> {{ post.getduree() }}<strong>   secondes</strong></a ><br>*/
/*         <a style="color: greenyellow"><strong>Le seuil de bonne réponse est de : </strong>{{ post.getseuil() }}</a><br> */
/*         </div>*/
/*             {% endfor %}*/
/*         </div>*/
/*     </td>*/
/* </div>*/
/* */
/* {% endblock %}*/
