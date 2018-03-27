<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_fe3c45576f450e02e2facef57b20cd9a3df7764d561835e448dc68e2d2b91416 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d04f001bd2b5f838a6210592f9ee3ece1bb8373bb2a0eebb7d16c880828f15ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d04f001bd2b5f838a6210592f9ee3ece1bb8373bb2a0eebb7d16c880828f15ee->enter($__internal_d04f001bd2b5f838a6210592f9ee3ece1bb8373bb2a0eebb7d16c880828f15ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_a7dd85b013e817cfb73e1e7df7535175c2b856369befb350f8ddd06a432f1754 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7dd85b013e817cfb73e1e7df7535175c2b856369befb350f8ddd06a432f1754->enter($__internal_a7dd85b013e817cfb73e1e7df7535175c2b856369befb350f8ddd06a432f1754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_d04f001bd2b5f838a6210592f9ee3ece1bb8373bb2a0eebb7d16c880828f15ee->leave($__internal_d04f001bd2b5f838a6210592f9ee3ece1bb8373bb2a0eebb7d16c880828f15ee_prof);

        
        $__internal_a7dd85b013e817cfb73e1e7df7535175c2b856369befb350f8ddd06a432f1754->leave($__internal_a7dd85b013e817cfb73e1e7df7535175c2b856369befb350f8ddd06a432f1754_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
